<?php
        require 'conexao.php';
        
        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $status = $_POST["status"];
        $id = $_POST["idUsu"];
        echo var_dump($id);

        if (isset($id)) {
            $cmdtext = ("UPDATE ADMINISTRADOR 
            SET ADM_EMAIL='$email', ADM_NOME='$nome', ADM_SENHA='$senha', ADM_ATIVO='$status' 
            WHERE ADM_ID=$id");

            $cmd = $pdo->prepare($cmdtext);
            $cmd->execute();

            echo '
            <p>Deu certo chefe</p>
            <a href="index.php">Voltar</a>'; 

        }else {
            echo 'Falha';
        } 

        
        