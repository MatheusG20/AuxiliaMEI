<?php 
namespace Models;

class ClassConexao{

    public function conectaDB()
    {
        try{
            $con=new \PDO("sqlsrv:Server=DESKTOP-L6PPKMT;Database=dbUsers","","");
            return $con;
        }catch (\PDOException $erro){
            return $erro->getMessage();
        }
    }
}

?>