<?php
            //dados para conexão ao mysql
       require 'conexao.php';
        //Capturar os valores das variaveis
        $nome = $_POST["nome"];
        $desc = $_POST["desc"];

        //Monta o comando de inserção
        $cmdtext = "INSERT INTO CATEGORIA(CATEGORIA_NOME, CATEGORIA_DESC, CATEGORIA_ATIVO) 
                    VALUES(:nome, :catDesc, :id_ativo )";
        $cmd = $pdo->prepare($cmdtext);
        $cmd->bindValue(':nome', $nome);
        $cmd->bindValue(':catDesc', $desc);
        $cmd->bindValue(':id_ativo', '1');
        
        $result = $cmd->execute();

        if (isset($result)) {
            echo 'Inserido com sucesso
                  <a href="categorias.php">voltar</a>';
        } else {
            echo 'Falha ao inserir
                  <a href="categorias.php">voltar</a>';
        }