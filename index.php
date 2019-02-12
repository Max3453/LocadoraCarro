<?php

  include_once 'Conexao.php';
  include_once 'DALCaminhoes.php';
  include_once 'Caminhoes.php';
  include_once 'Veiculo.php';

  
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
//$query = "insert into cliente (nome,cpf,email,telefone) values ('Vitor','11','asdasd','4215'";
//mysqli_query(conectar()->$conn, $query);


/*class Loja {
    

    
    
    
    
    function Cadastrar(){
    
        $x = 20;
        
        if (quantidade <= $capacidade = 20){   
        
         switch (x){
            
            case VeiculoP:
                
                
            case VeiculosU:
                    
            case Motocicleta:
            
            case Onibus:
                
            case Caminhoes:    
                
        }
     }
        
    }
    
    */
