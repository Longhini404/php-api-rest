<?php
include '../control/ConteudoControl.php';
$conteudoControl = new ConteudoControl();

header('Content-Type: application/json');

$saida=[];

foreach($conteudoControl->findAll() as $valor){
	$saida[]=$valor;
}

echo json_encode($saida);