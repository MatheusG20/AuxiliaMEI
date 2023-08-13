<?php 
$email=\Traits\TraitParseUrl::parseUrl(2);
$token=\Traits\TraitParseUrl::parseUrl(3);
$confirmation=new \Models\ClassCadastro();


if($confirmation->confirmationCad($email,$token)){
    echo "
        <script>
        alert('Dados confirmados com sucesso!');
        window.location.href='".DIRPAGE."login';
        </script>
    ";
}else{
   var_dump($confirmation);
   var_dump($email);
   var_dump($token);

}

  






?>