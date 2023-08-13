<?php
include("../lib/vendor/autoload.php");

require_once 'config/config.php';
require_once(DIRREQ . 'helpers/variables.php');
require_once(DIRREQ . 'classes/ClassValidate.php');

$validate = new \Classes\ClassValidate();

$arrVar = [
    "description" => $description,
    "valorNFSE" => $valorNFSE,
    "tomadorCNPJ" => $tomadorCNPJ,
];

if ($validate->validateMailClientNFSE($arrVar)) {
    var_dump($valorNFSE);
} else {
    var_dump($valorNFSE);
}
?>