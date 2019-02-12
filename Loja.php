<?php
require_once 'VeiculosP.php';
require_once 'VeiculosU.php';
require_once 'Motocicletas.php';
require_once 'Onibus.php';
require_once 'Caminhoes.php';




$placa = $_GET['placa'];
$cor = $_GET['cor'];
$modelo = $_GET['modelo'];
$fabricante = $_GET['fabricante'];
$anofabri = $_GET['anofabri'];
$valordia = $_GET['valordia'];
$status = $_GET['status'];
$numporta = $_GET['numporta'];
$tipo = $_GET['tipo'];
$ar = $_GET['ar'];
$dr = $_GET['dr'];

$c1 = new VeiculosP($placa, $cor, $modelo, $fabricante, $anofabri, $valordia, $status, $numporta, $ar, $dr);

    
