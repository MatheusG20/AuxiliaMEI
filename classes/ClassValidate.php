<?php 
namespace Classes;

use Models\ClassCadastro;
use Classes\ClassMail;
use Models\ClassLogin;
use ZxcvbnPhp\Zxcvbn;
use Classes\ClassPassword;


class ClassValidate{
    
    const URL_BASE = 'https://api-publica.speedio.com.br'; 
    private $erro=[];
    private $cadastro;
    private $password;
    private $login;
    private $tentativas;
    private $session;
    private $mail;

    public function __construct()
    {
        $this->cadastro=new ClassCadastro();
        $this->password=new ClassPassword();
        $this->login=new ClassLogin();
        $this->session=new ClassSessions();
        $this->mail=new ClassMail();
    }
    
    public function getErro()
    {
        return $this->erro;
    }

    public function setErro($erro)
    {
       array_push($this->erro,$erro);
    }

    #validar se os campos desejados foram preenchidos
    public function validateFields($par)
    {
        $i=0;
        foreach ($par as $key => $value){
            if(empty($value)){
                $i++;
            }
        }

        if($i==0){
            return true;
        }else{
            $this->setErro("Preencha todos os dados!");
            return false;
        }
    }


    #validação se o dado é email
    public function validateEmail($par)
    {
        if(filter_var($par, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            $this->setErro("Email inválido!");
            return false;
        }
    }

    #Validar se o email existe no banco de dados (action null p/ cadastro)
    public function validateIssetEmail($email,$action=null)
    {
        $b=$this->cadastro->getIssetEmail($email); 
        
        if($action==null){
            if($b < 0){
                $this->setErro("Email já cadastrado");
                return false;
            }else{
                return true;
            }
        }else{
            if($b < 0){
                return true;
            }else{
                $this->setErro("Email não cadastrado");
                return false;
            }
        }  
     
    }

    
    #validação se o dado é uma data
    /*public function validateData($par)
    {
        $data=\DateTime::createFromFormat("d/m/Y",$par);
        if(($data) && ($data->format("d/m/Y")== $par)){return true;
        }else{
            $this->setErro("Data inválida!");
            return false;
        }
    }*/
    /*
    public function validateTel($par)
    {
    
        if(filter_var($par,FILTER_SANITIZE_SPECIAL_CHARS)){
            return true;
        }else{
            $this->setErro("Telefone não condiz com o do CNPJ");
            return false;
        }
    }
    */
   


    #Validação se o CNPJ é igual o do banco de dados
    public function validateequalCNPJ($cnpj, $email)
    {
       $dataDb=$this->login->getDataUser($email)["data"]["cnpjUser"];
       if($cnpj == $dataDb){
            return true;
       }else{
            $this->setErro("CNPJ não confere com o usuário");
            return false;
       }
    }
    
    public function validateCnpj($par)
    {
        //REMOVE OS CARACTERES INVÁLIDOS
        $par = preg_replace('/\D/','',$par);
        
        
        //RETORNAR A EXECUÇÃO DA CONSULTA
        return $this->get('/buscarcnpj?cnpj='. $par);
    }

    public function get($resource){
        //ENDPOINT COMPLETO DA API
        $endpoint = self::URL_BASE.$resource;

       //INICIA O CURL
       $curl = curl_init();

       //CONFIG do CURL
       curl_setopt_array($curl,[
        CURLOPT_URL             => $endpoint,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_CUSTOMREQUEST   => 'GET'
       ]);

       //EXECUTA REQUISIÇÃO
       $response = curl_exec($curl);

       //FECHA CONEXAO
       curl_close($curl);

       //RESPONSE EM ARRAY
       $responseArray = json_decode($response,true);

       //RETORNAR O ARRAY COM OS DADOS
       return is_array($responseArray) ? $responseArray : [];
    }

    #validação final do cadastro
    public function validateFinalCad($arrVar)
    {
        if(count($this->getErro())>0){
            $arrResponse=[
                "retorno"=>"erro",
                "erros"=>$this->getErro()
            ];
        }else{
            $this->mail->sendMail
            ($arrVar['email'],
            $arrVar['nome'],
            $arrVar['token'],
            "
            Cadastro do Site
            Confirme seu email <a href='".DIRPAGE."controllers/controllerConfirmacao/{$arrVar['email']}/{$arrVar['token']}'>clicando aqui</a>.
           ",
           "Confirmação de Cadastro " 
         );
            $arrResponse=[
                "retorno"=>"success",
                "erros"=>null
            ];
             $this->cadastro->insertCad($arrVar); 
        }
        return json_encode($arrResponse);
    }

    #Verificar se a senha é igual a confirmação de senha
    public function validateConfSenha($senha,$senhaConf)
    {
        if($senha === $senhaConf){
            return true;
        }else{
            $this->setErro("Senha diferente de confirmação de senha");
        }
    }


    #Verificar a força da senha
    public function validateStrongSenha($senha, $par=null)
    {
        $zxcvbn = new Zxcvbn();
        $strenght = $zxcvbn->passwordStrength($senha);
        $strenght['score'];

        if($par==null)
        {
            if($strenght['score'] >= 3){
                return true;
            }else{
                $this->setErro("Utilize uma senha mais forte");
            }
        }else{
            /*login*/
        }
    }

    #Ver. da senha digitada com o hash no banco de dados
    public function validateSenha($email, $senha)
    {
        if($this->password->verifyHash($email, $senha))
        {
            return true;
        }else{
            $this->setErro("Usuário ou Senha Inválidos");
        }
    }

    #Vericar se o captcha está correto
    public function validateCaptcha($captcha, $score=0.5)
    {
        $return=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRETKEY."&response={$captcha}");
        $response=json_decode($return);
        if($response->success == true && $response->score >= $score ){
            return true;
        }else{
            $this->setErro("Captcha Inválido! Atualize a página e tente novamente.");
        }
    }

    #Validação final do login
    public function validateFinalLogin($email)
    {
        if(count($this->getErro()) >0){
            $this->login->insertAttempt();

            $arrResponse=[
                "retorno"=>"erro",
                "erros"=>$this->getErro(),
                "tentativas"=>$this->tentativas
            ];

        }else{
            $this->login->deleteAttempt();
            $this->session->setSessions($email); 

            $arrResponse=[
                "retorno"=>"success",
                "page"=>'central',
                "tentativas"=>$this->tentativas
            ];
        }

        return json_encode($arrResponse);
    }

    #validação das tentativas
    public function validateAttemptLogin()
    {
        if($this->login->countAttempt() > 5){
            $this->setErro("Você realizou mais de 5 tentativas");
            $this->tentativas=true;
            return false;
        }else{
            $this->tentativas=false;
            return true;
        }
    }

    #Método de validação de confirmação de email
    public function validateUserActive($email)
    {
        $user=$this->login->getDataUser($email);
        if($user["data"]["statusUser"] == "100"){
            if(strtotime($user["data"]["criacaoUser"])<= strtotime(date("Y-m-d H:i:s"))-432000){
                $this->setErro("Ative seu cadastro pelo link do email");
                return false;
            }else{
                return true;
            }
        }else{
            return true;
        }
    }

    public function validateFinalSen($arrVar)
    {
        if(count($this->getErro())>0){
            $arrResponse=[
                "retorno"=>"erro",
                "erros"=>$this->getErro()
            ];
        }else{
            $this->mail->sendMail(
            $arrVar['email'],
            $arrVar['nome'],
            $arrVar['token'],
            "
            Link para Confirmação de senha
            Redefinição de senha <a href='".DIRPAGE."redefinicaoSenha{$arrVar['email']}/{$arrVar['token']}'>clicando aqui</a>.
           ",
           "Confirmação de Cadastro " 
         );
            $arrResponse=[
                "retorno"=>"success",
                "erros"=>null
            ];
             $this->cadastro->insConfirmation($arrVar); 
        }
        return json_encode($arrResponse);
    }

    public function validateMailClientNFSE($arrVar)
    {
        
        if (count($this->getErro()) > 0) {
            $arrResponse = [
                "retorno" => "erro",
                "erros" => $this->getErro()
            ];
        }else{
            $this->mail->sendMailClient(
          
            "
            {$arrVar['description']}
            ",
            "Confirmação de Cadastro "
        );
            $arrResponse = [
                "retorno" => "success",
                "erros" => null
            ];
        }
        return json_encode($arrResponse);
    }
   
    
};


?>