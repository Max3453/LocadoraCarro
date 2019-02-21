<?php

  include_once 'Conexao.php';
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
$tipoTracao = $_POST['tr'];
$diametroAro = $_POST['daro'];
$tetoSolar = $_POST['ts'];
$tipo = $_POST['tipo'];
    
$c1 = new VeiculosU($placa, $cor, $modelo, $fabricante, $anofabri, $valordia, $status, $tipoTracao,$tetoSolar,$diametroAro, $tipo);
$cx = new Conexao();
$dao = new DAOVeiculosU($cx);
$dao->Inserir($c1);
sleep(2);
header("Location: ../view/menu.php");