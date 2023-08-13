<?php 
namespace Models;
require_once '../config/config.php';
require_once(DIRREQ . 'config/config.php');

class ClassConexao{

    public function conectaDB()
    {
        try{
            $con=new \PDO("sqlsrv:Server=".HOST.";Database=".DB."","".USER."","".PASS."");
            return $con;
        }catch (\PDOException $erro){
            return $erro->getMessage();
        }
    }
}

?>