<!DOCTYPE html>
<html>

<div class="container" style="background-color:#fff ">
<head>
<title>SKT Shop</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="icon" type="image/png" href="img/icon2.png"/>	

</head>

<body>

<div class="alert alert-info" role="alert" style="text-align:center;">
  Semana dos Games
</div>
	<h1 style="text-align: center">SKT Shop</h1>
	<hr/>	
<header style="background-color: #293337; padding-top: 20px;">
	<div class="row">
		<div class="col-md-4">
			<img src="img/logo2.jpg">
		</div>
			


<form method="POST" action="logar.php" class="col-md-7" style="color: #3ae5e7; padding-bottom: 20px">
	  <div class="form-group">
	    <label for="exampleInputEmail1">CPF</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CPF" name="cpf">
	    
	  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">
  </div>
  <div class="form-check">
   <div style="color: #fff;">			
   	<?php 
		session_start();
		include 'conexao.php';
		echo $_SESSION['nome1'];
		echo $_SESSION['datan'];


	 ?>
</div>	
  
  </div>
 <center> <button type="submit" class="btn btn-outline-info my-2 my-sm-0">Entrar</button></center>
</form>


</div>





							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							  </ol>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img class="d-block w-100" src="img/roda1.jpg" alt="First slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="img/roda2.jpg" alt="Second slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="img/roda3.jpg" alt="Third slide">
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>

										



    <nav class="nav nav-pills nav-fill navbar navbar-expand-lg navbar-dark bg-dark" style="padding-top: 15px">
      <a class="nav-item nav-link" href="index.php" style="color: #3ae5e7">Home</a>
      <a class="nav-item nav-link" href="produtos.php" style="color: #3ae5e7">Produtos</a>
      <a class="nav-item nav-link" href="cadastro.php" style="color: #3ae5e7">Cadastro</a>
   
    </nav>

<nav class="nav nav-pills nav-fill navbar navbar-expand-lg navbar-info bg-info" style="padding-top: 1px "></nav>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="produto.php?cat=game" style="color: #3ae5e7">Games<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produto.php?cat=Livros" style="color: #3ae5e7">Livros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produto.php?cat=cel" style="color: #3ae5e7">Celulares</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produto.php?cat=info" style="color: #3ae5e7">Informática</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produto.php?cat=roupa" style="color: #3ae5e7">Roupas</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="produto.php?cat=eletro" style="color: #3ae5e7">Eletronicos</a>
      </li>
     
     
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="selectpesquisa.php">
      <input class="form-control mr-sm-2" type="search" placeholder="pesquisar" aria-label="Search" name="nome">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">pesquisar</button>
    </form>
  </div>
</nav>

	 
			</header>





<?php
include 'conexao.php';
?>


</div>