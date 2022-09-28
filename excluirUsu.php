<?php 
        $mysqlhostname = '144.22.244.104';
        $mysqlport = '3306';
        $mysqlusername = 'Bravo4Fun';
        $mysqlpassword = 'Bravo4Fun';
        $mysqldatabase = 'Bravo4Fun';

        //Mostra a String de Conexao ao Mysql

        $dsn = 'mysql:host=' . $mysqlhostname .';dbname='. $mysqldatabase . ';port='. $mysqlport;
        $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

        if (isset($_GET['delete'])) {
            $id = (int)$_GET['delete'];
            $pdo->exec("DELETE FROM ADMINISTRADOR WHERE id = $id");
            echo 'Deletado com sucesso o id:' .$id;
        }

?>