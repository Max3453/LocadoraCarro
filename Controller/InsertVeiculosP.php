<?php

  include_once 'Conexao.php';
  include_once '../modelDAO/DAOVeiculosP.php';
  include_once '../VeiculosP.php';
  include_once '../Veiculo.php';
  
  
$placa = $_POST['placa'];
$cor = $_POST['cor'];
$modelo = $_POST['modelo'];
$fabricante = $_POST['fabricante'];
$anofabri = $_POST['anofabri'];
$valordia = $_POST['valordia'];
$status = $_POST['status'];
$nPortas = $_POST['numporta'];
$arCondicionado = $_POST['ar'];
$dHidraulica = $_POST['dh'];
    
$c1 = new VeiculosP($placa, $cor, $modelo, $fabricante, $anofabri, $valordia, $status, $nPortas, $arCondicionado,$dh);
$cx = new Conexao();
$dao = new DAOVeiculosP($cx);
$dao->Inserir($c1);
sleep(2);
header("Location: ../view/menu.php");