<?php
        require '/assets/login/conexao.php';

        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        
        $cmdtext = ("UPDATE ADMINISTRADOR 
        SET ADM_EMAIL='$email' ADM_NOME='$nome' ADM_SENHA='$senha' 
        WHERE ADM_ID=$id");

        
        