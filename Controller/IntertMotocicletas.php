<?php

  include_once 'Conexao.php';
  include_once '../modelDAO/DAOMotocicletas.php';
  include_once '../Motocicletas.php';
  include_once '../Veiculo.php';
  
  
$placa = $_POST['placa'];
$cor = $_POST['cor'];
$modelo = $_POST['modelo'];
$fabricante = $_POST['fabricante'];
$anofabri = $_POST['anofabri'];
$valordia = $_POST['valordia'];
$status = $_POST['status'];
$potencia = $_POST['pot2'];
$tipo = $_POST['select2'];

    
$c1 = new Motocicletas($placa, $cor, $modelo, $fabricante, $anofabri, $valordia, $status, $numpass, $numei);
$cx = new Conexao();
$dao = new DAOMotocicletas($cx);
$dao->Inserir($c1);
sleep(2);
header("Location: ../view/menu.php");