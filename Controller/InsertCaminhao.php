<?php

  include_once 'Conexao.php';
  include_once '../modelDAO/DAOCaminhoes.php';
  include_once '../Caminhoes.php';
  include_once '../Veiculo.php';

  
$placa = $_POST['placa'];
$cor = $_POST['cor'];
$modelo = $_POST['modelo'];
$fabricante = $_POST['fabricante'];
$anofabri = $_POST['anofabri'];
$valordia = $_POST['valordia'];
$status = $_POST['status'];
$capacidadeCarga = $_POST['pot'];
$numeroEixos = $_POST['carga'];
$potencia = $_POST['numei']; 
    
$c1 = new Caminhoes($placa, $cor, $modelo, $fabricante, $anofabri, $valordia, $status, $numeroEixos, $capacidadeCarga, $potencia);
$cx = new Conexao();
$dao = new DAOCaminhoes($cx);
$dao->Inserir($c1);
sleep(2);
header("Location: ../view/menu.php");