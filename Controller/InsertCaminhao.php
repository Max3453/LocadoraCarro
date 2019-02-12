<?php

  include_once 'Conexao.php';
  include_once '../modelDAO/DAOCaminhao.php';
  include_once '../Caminhao.php';
  include_once '../Veiculo.php';

  
 $placa = $_POST['placa'];
$cor = $_POST['cor'];
$modelo = $_POST['modelo'];
$fabricante = $_POST['fabricante'];
$anofabri = $_POST['anofabri'];
$valordia = $_POST['valordia'];
$status = $_POST['status'];
$numporta = $_POST['numporta'];
$capacidadeCarga = $_POST['pot'];
$numeroEixos = $_POST['carga'];
$potencia = $_POST['numei']; 
    
$c1 = new Caminhoes($placa, $cor, $modelo, $fabricante, $anofabri, $valordia, $status, $numeroEixos, $capicadeCarga, $potencia);
$cx = new Conexao();
$dal = new DALCaminhoes($cx);
$dal->Inserir($c1);
sleep(2);
header("Location: view/menu.php");