<?php

    $objPass=new \Classes\ClassPassword();

    if(isset($_POST['nome'])){$nome=filter_input(INPUT_POST,'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }else{$nome=null;}

    if(isset($_POST['cnpj'])){$cnpj=filter_input(INPUT_POST,'cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{$cnpj=null;}

    if(isset($_POST['cpf'])){$cpf=filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{$cpf=null;}

    if(isset($_POST['tel'])){$tel=filter_input(INPUT_POST,'tel', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{$tel=null;}

    if(isset($_POST['email'])){$email=filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    }else{$email=null;}

    if(isset($_POST['senha'])){$senha=$_POST['senha']; $hashSenha=$objPass->passwordHash($senha);
    }else{$senha=null; $hashSenha=null;}

    if(isset($_POST['senhaConf'])){$senhaConf=$_POST['senhaConf'];
    }else{$senhaConf=null;}

    if(isset($_POST['g-recaptcha-response'])){$gRecaptchaResponse=$_POST['g-recaptcha-response'];}else{$gRecaptchaResponse=null;}

    $dataCreate=date("Y-m-d H:i:s");
    if(isset($_POST['token'])){$token=$_POST['token'];}else{$token=bin2hex(random_bytes(64));}


    #Solicitação de emissão de NFSE
    if(isset($_POST['tomadorCNPJ'])){$tomadorCNPJ=$_POST['tomadorCNPJ'];}else{$tomadorCNPJ=null;}
    if(isset($_POST['valorNFSE'])){$valorNFSE=$_POST['valorNFSE'];}else{$valorNFSE=null;}
    if(isset($_POST['description'])){$description=$_POST['description'];}else{$description=null;}

    
    $arrVar=[
        "nome"=>$nome,
        "email"=>$email,
        "cnpj"=>$cnpj,
        "cpf"=>$cpf,
        "tel"=>$tel,
        "senha"=>$senha,
        "hashSenha"=>$hashSenha,
        "dataCreate"=>$dataCreate,
        "token"=>$token,
        "tomadorCNPJ"=>$tomadorCNPJ,
        "valorNFSE"=>$valorNFSE,
        "description"=>$description,
    ];

?>