<?php 
include("../lib/vendor/autoload.php");



$validate=new \Classes\ClassValidate(); 
$confirmation=new \Models\ClassCadastro();

if($validate->validateCaptcha($gRecaptchaResponse)){
    if($validate->validateConfSenha($senha, $senhaConf)){
        if($validate->validateStrongSenha($senha)){
            if($confirmation->confirmationSen($email,$token,$hashSenha)){
                echo "<script> alert('Senha foi alterada com sucesso!');</script>";
            }else{
                echo "<script> alert('Não foi possível verificar seus dados!');</script>";
            }
        }else{
            echo "<script> alert('Senha fraca!');</script>";
        }
    }else{
        echo "<script>alert('Senha diferente da confirmação de senha');</script>";
    }
}else{
    echo "<script> alert('Captcha Inválido!');</script>";
}
echo "<script>window.location.href='".DIRPAGE."login';</script>";



  






?>