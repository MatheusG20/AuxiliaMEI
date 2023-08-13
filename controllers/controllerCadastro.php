<?php
$validate= new Classes\ClassValidate();
//CONSULTA O CNPJ NAS APIS DO SPEEDIO
//$obSpeedio = new ClassValidate;
//$resultado = $obSpeedio->validateCnpj($cnpj);
//VALIDA EMAIL
$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email);
//$validate->validateStrongSenha($senha);
//$validate->validateConfSenha($senha, $senhaConf);
var_dump($validate->getErro());
//$validate->validateCaptcha($gRecaptchaResponse);
$validate->validateFinalCad($arrVar);

//$tel = preg_replace('/\D/', '', $tel);
/*$validate->validateTel($tel);
$telefone = $resultado['DDD'].$resultado['TELEFONE'];
echo $tel;
if($telefone==$tel){
    echo " Os números coincidem";
    return true;
}else{
    echo " Os números não coincidem";
    return false;
}


//VERIFICA O RESULTADO DA VER. API
if(empty($resultado)){
    die('Problemas ao consultar CNPJ');
}

//VERIFICA O ERRO DA REQUISIÇÃO
if(isset($resultado['error'])){
    die($resultado['error']);
}


//IMPRIME OS DADOS DE SUCESSO;
echo "CNPJ: ".$cnpj."\n";
echo "Telefone cadastrado: ".$telefone. "\n";

echo "<pre>";
print_r($resultado);
var_dump($validate->getErro());
echo "</pre>"; exit;
*/



?>