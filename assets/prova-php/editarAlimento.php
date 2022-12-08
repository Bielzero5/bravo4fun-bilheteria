<?php
//Buscamos o código que conecta no SGBD
require_once 'conexao.php';

$id = $_POST['id'];
$idInt = intval($id);
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];

$stmt = $bd->prepare("  UPDATE ALIMENTOS 
                        SET nomeAlimento = :nome,
                            tipoAlimento = :tipo
                        WHERE
                            idAlimento = :id");
$stmt->bindParam(':id', $idInt);                            
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':tipo', $tipo);

$stmt->execute();

$atualizou = false;

if($stmt->rowCount() > 0){

    $atualizou = true;
}

include 'index.php';