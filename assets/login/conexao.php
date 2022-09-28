<?php 

session_start();

//dados para conexão ao mysql
$mysqlhostname = '144.22.244.104';
$mysqlport = '3306';
$mysqlusername = 'Bravo4Fun';
$mysqlpassword = 'Bravo4Fun';
$mysqldatabase = 'Bravo4Fun';

global $pdo;
//Mostra a String de Conexao ao Mysql

try {
    $dsn = 'mysql:host=' . $mysqlhostname .';
            dbname='. $mysqldatabase . ';
            port='. $mysqlport;

    $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}





?>