<?php
        $mysqlhostname = '144.22.244.104';
        $mysqlport = '3306';
        $mysqlusername = 'Bravo4Fun';
        $mysqlpassword = 'Bravo4Fun';
        $mysqldatabase = 'Bravo4Fun';

        //Mostra a String de Conexao ao Mysql

        $dsn = 'mysql:host=' . $mysqlhostname .';dbname='. $mysqldatabase . ';port='. $mysqlport;
        $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $pdo->exec("UPDATE ADMINISTRADOR SET ADM_EMAIL='$email' ADM_NOME='$nome' ADM_SENHA='$senha' WHERE ADM_ID=$id");