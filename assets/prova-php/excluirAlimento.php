<?php

require_once 'conexao.php';

$id = $_GET['id'] ?? 0;



$id = preg_replace( '/\D/', '', $id);

if ( $bd->exec("DELETE FROM ALIMENTOS WHERE idAlimento = $id") ){

    $apagou = true;

}else{

    $apagou = false;
}

include 'index.php';