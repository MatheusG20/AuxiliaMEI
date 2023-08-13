<?php 
#Caminhos absolutos
$pastaInterna="def/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="": $barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRIMG',DIRPAGE.'img/');
define('DIRCSS', DIRPAGE.'lib/css/');
define('DIRJS', DIRPAGE.'lib/js/'); 

#Acesso ao DB
define('HOST',"DESKTOP-L6PPKMT");
define('DB',"dbUsers");
define('USER',"");
define('PASS', "");

#Informações do servidor de email
define("HOSTMAIL","sandbox.smtp.mailtrap.io");
define("USERMAIL","d451d18ae1c99f");
define("PASSMAIL","375c125cbefc0d");


#Outras informações
define("SITEKEY","6LfgQtomAAAAAC96go5ZWu2E2DEFgFD9VhiECdFg");
define("SECRETKEY","6LfgQtomAAAAAG7vI2iM99ZPCYWW_P0bd9dTFtiJ");
define("DOMAIN", $_SERVER["HTTP_HOST"]);



?>