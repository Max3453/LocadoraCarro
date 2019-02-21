<?php

  require_once('../Controller/Conexao.php');
  include_once '../modelDAO/DAOVeiculosU.php';
  include_once '../VeiculosU.php';
  include_once '../Veiculo.php';
  
  
$placa = $_POST['placa'];
$cor = $_POST['cor'];
$modelo = $_POST['modelo'];
$fabricante = $_POST['fabricante'];
$anofabri = $_POST['anofabri'];
$valordia = $_POST['valordia'];
$status = $_POST['status'];
$tracao = $_POST['tr'];
$aro = $_POST['daro'];
$tsolar = $_POST['ts'];
$tp = $_POST['tipo'];


$c1 = new VeiculosU($placa, $cor, $modelo, $fabricante, $anofabri, $valordia, $status, $tracao,$tsolar,$aro, $tp);
$cx = new Conexao();
$dao = new DAOVeiculosU($cx);
$dao->Inserir($c1);
sleep(2);
header("Location: ../view/menu.php");