<?php 
        require 'conexao.php';
        $id = $_GET["id"];

        if (isset($id)) {
            $cmdtext = ("UPDATE CATEGORIA SET CATEGORIA_ATIVO=0 WHERE CATEGORIA_ID=$id");

            $cmd = $pdo->prepare($cmdtext);
            $cmd->execute();

            echo '<a href="index.php">Voltar</a>';

        }else {
            echo 'Falha';
        }

        
?>