<?php

namespace Models;


class ClassCadastro extends ClassCrud{

    #realizar a inserção no banco de dados
    public function insertCad($arrVar)
    {
        $this->insertDB(
            "tbUsuarios",
            "?,?,?,?,?,?,?,?,?,?",
            array(
                $arrVar['cnpj'],
                $arrVar['cpf'],
                $arrVar['nome'],
                $arrVar['email'],
                $arrVar['tel'],
                $arrVar['hashSenha'],
                '100',
                $arrVar['dataCreate'],
                'user'

            ) 
        );

        $this->insConfirmation($arrVar);
    }

        #Inserção de confirmação
    public function insConfirmation($arrVar)
    {
        $this->insertDB(
            "confirmation",
            "?,?,?",
            array(
                $arrVar['email'],
                $arrVar['token']
            )
        );
    }
    


    #verificar no banco se o email está cadastrado(só o model pode acessar o banco de dados pelo padrão MVC)
    public function getIssetEmail($email)
    {
        $b=$this->selectDB(
            "*",
            "tbUsuarios",
            "where emailUser=?",
            array(
                $email
            )
        );
        return $r=$b->rowCount();
    }


    #Verificara conifrmação de cadastro pelo email
    public function confirmationCad($email, $token)
    {
        
         $b=$this->selectDB(
            "*",
            "confirmation",
            "where email=? and token=?",
            array(
               $email,
               $token
            )
        ); 
        $r=$b->rowCount();

        if($r <0) {
            $this->deleteDB(
                "confirmation",
                "email=?",
                array($email)
            );
            $this->updateDB(
                "tbUsuarios",
                "statusUser=?",
                "emailUser=?",
                array(
                    "active",
                    $email 
                )
            );
            return true; 
        } else {
            return false;
        }
    }

    #Verificar a confirmação de cadastro pelo email
    public function confirmationSen($email, $token, $hashSenha)
    {
        
         $b=$this->selectDB(
            "*",
            "confirmation",
            "where email=? and token=?",
            array(
               $email,
               $token
            )
        ); 
        $r=$b->rowCount();

        if($r <0) {
            $this->deleteDB(
                "confirmation",
                "email=?",
                array($email)
            );
            $this->updateDB(
                "tbUsuarios",
                "senhaUser=?",
                "emailUser=?",
                array(
                    $hashSenha,
                    $email 
                )
            );
            return true; 
        } else {
            return false;
        }
    }
}

?>