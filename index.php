<?php 
header("Content-Type: text/html; charset=utf-8");
include("config/config.php");
include(DIRREQ."helpers/variables.php");
include(DIRREQ."lib/vendor/autoload.php");
$dispatch=new Classes\ClassDispatch();
include($dispatch->getInclusao());


//$date=date("Y-m-d H:i:s");
//use Models\ClassCrud;
/*
$crud=new ClassCrud();
$crud->insertDB(
    "tbUsuarios",
    "?,?,?,?,?,?,?,?,?",
    array(
        'Magao',
        'matheus@5gmail.com',
        '1004',
        '1003',
        '1001',
        '1000',
        '613',
        $date

    )
);
*/


    

 
 ?>