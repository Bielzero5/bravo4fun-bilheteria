<?php
            //dados para conexão ao mysql
       require 'conexao.php';
        //Capturar os valores das variaveis
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        //Monta o comando de inserção
        $cmdtext = "INSERT INTO ADMINISTRADOR(ADM_NOME, ADM_EMAIL, ADM_SENHA, ADM_ATIVO) 
                    VALUES(:nome, :email, :senha, :id_ativo )";
        $cmd = $pdo->prepare($cmdtext);
        $cmd->bindValue(':nome', $nome);
        $cmd->bindValue(':email', $email);
        $cmd->bindValue(':senha', $senha);
        $cmd->bindValue(':id_ativo', '1');
        
        $result = $cmd->execute();

        if (isset($result)) {
            echo 'Inserido com sucesso
                  <a href="index.php">voltar</a>';
        } else {
            echo 'Falha ao inserir
                  <a href="index.php">voltar</a>';
        }