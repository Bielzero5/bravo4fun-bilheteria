<?php
        require 'conexao.php';

        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $id = $_GET["id"];

        if (isset($id)) {
            echo $id;
            /* $cmdtext = ("UPDATE ADMINISTRADOR 
            SET ADM_NOME='$nome', ADM_EMAIL='$email', ADM_SENHA='$senha' 
            WHERE ADM_ID=$id");

            $cmd = $pdo->prepare($cmdtext);
            $cmd->execute();

            echo '<a href="index.php">Voltar</a>'; */

        }else {
            echo 'Falha';
        } 

        
        