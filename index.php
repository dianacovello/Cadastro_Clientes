<!doctype html>
<html lang="pt-BR">
<head>
	<title>Consultoria</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">


	<style type="text/css">
	body h1{		
		font-family: 'Russo One', sans-serif;
		color: #077fff;
    padding:  10px 0px;
    text-align: center;
	}
  body h2 {
    color: #29069b;
    text-align: center;
    font-weight: bold;
  }
	body .navbar{
		padding:  35px;
		font-size: 16pt;
	}


</style>

</head>
<body>

	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="index.php?page=home"> <i class="fa fa-address-card-o" aria-hidden="true"></i>
		DC Consultoria </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">        
        <!--<li class="nav-item">
          <a class="nav-link" href="#">Inicio</a>
        </li> -->
        
        <li class="nav-item dropdown active">
        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        		Clientes
        	</a>
        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        		<a class="dropdown-item" href="index.php?page=cadastrar-cliente">Cadastrar Cliente</a>
        		<a class="dropdown-item" href="index.php?page=listar-cliente">Listar Clientes</a>

        	</div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
  	<div class="row">
  		<div class="col-lg-12">
  			<?php 

  			include("config.php");

  			switch(@$_REQUEST["page"]){
  				case "cadastrar-cliente":
  				include("cadastrar-cliente.php");
  				break;
  				case "listar-cliente":
  				include("listar-cliente.php");
  				break;
  				case "salvar-cliente":
  				include("salvar-cliente.php");
  				break;         
  				case "editar-cliente":
  				include("editar-cliente.php");
  				break;
  				default;
          include("home.php"); // se colocar index.php, vai ficar recarregando a pagina
        } 
        
        ?>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>