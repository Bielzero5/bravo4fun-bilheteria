<?php

class Usuario{

    public function login( $email, $senha) {
        global $pdo;

        $sql = "SELECT * FROM ADMINISTRADOR WHERE ADM_EMAIL = :email AND ADM_SENHA = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            $_SESSION['IdUsu'] = $dado['ADM_ID'];
            
            return true;
        } else {
            return false;
        }
    }
}