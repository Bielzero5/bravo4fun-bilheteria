<?php 
        require 'conexao.php';
        $id = $_GET["id"];

        if (isset($id)) {
            $cmdtext = ("UPDATE ADMINISTRADOR SET ADM_ATIVO=0 WHERE ADM_ID=$id");

            $cmd = $pdo->prepare($cmdtext);
            $cmd->execute();

            echo '<a href="index.php">Voltar</a>';

        }else {
            echo 'Falha';
        }

        
?>