<?php

  include_once 'Conexao.php';
  include_once '../modelDAO/DAOOnibus.php';
  include_once '../Onibus.php';
  include_once '../Veiculo.php';
  
  
$placa = $_POST['placa'];
$cor = $_POST['cor'];
$modelo = $_POST['modelo'];
$fabricante = $_POST['fabricante'];
$anofabri = $_POST['anofabri'];
$valordia = $_POST['valordia'];
$status = $_POST['status'];
$numpass = $_POST['numpass'];
$numei = $_POST['numei'];
    
$c1 = new Onibus($placa, $cor, $modelo, $fabricante, $anofabri, $valordia, $status, $numpass, $numei);
$cx = new Conexao();
$dao = new DAOOnibus($cx);
$dao->Inserir($c1);
sleep(2);
header("Location: ../view/menu.php");