<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!--Bootstrap files -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

  <!--Fontawesome icons-->
  <link rel="stylesheet" href="css/icons/css/all.css">

  <!-- Jquery Mask-->
  <script src="js/jquery.mask.js"></script>
</head>
<body>
  <!--MENU-->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F2203C;">
    <i class="fas fa-car car"></i>&nbsp
    <a class="navbar-brand" href="menu.php">CrazyCar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cadastrar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="passeio.php">Veiculo de passeio</a>
            <a class="dropdown-item" href="utilitario.php">Veiculo utilitário</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="onibus.php">Ônibus</a>
            <a class="dropdown-item" href="motocicleta.php">Motocicleta</a>
            <a class="dropdown-item" href="caminhao.php">Caminhão</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vender
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Vender</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pesquisar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Marca/Modelo</a>
            <a class="dropdown-item" href="#">Ano/Valor</a>
            <a class="dropdown-item" href="#">Placa</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Carros
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Vendidos</a>
            <a class="dropdown-item" href="#">Disponíveis</a>
            <a class="dropdown-item" href="#"></a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Lista
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="http://localhost/LocadoraCarro/view/Table_VeiculosP.php">Carro Passeio</a>
            <a class="dropdown-item" href="http://localhost/LocadoraCarro/view/Table_VeiculosU.php">Carro Utilitário</a>
            <a class="dropdown-item" href="http://localhost/LocadoraCarro/view/Table_Onibus.php">Ônibus</a>
            <a class="dropdown-item" href="http://localhost/LocadoraCarro/view/Table_Motocicleta.php">Motocicleta</a>
            <a class="dropdown-item" href="http://localhost/LocadoraCarro/view/Table_Caminhao.php">Caminhão</a>

          </div>
        </li>
      </div>
    </div>
  </nav>
</body>
