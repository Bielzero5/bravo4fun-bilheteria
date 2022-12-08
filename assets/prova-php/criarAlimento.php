<?php
//Buscamos o código que conecta no SGBD
require_once 'conexao.php';

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];

$consulta = 
    $bd->prepare('  INSERT INTO ALIMENTOS 
                        (nomeAlimento, tipoAlimento)
                    VALUES
                        (:nome, :tipo)');


$consulta->bindParam(':nome', $nome);
$consulta->bindParam(':tipo', $tipo);



if( $consulta->execute() ){
    $gravou = true;
}else{
    $gravou = false;
}
//Finalmente executamos a consulta
//no SGBD

include 'index.php';