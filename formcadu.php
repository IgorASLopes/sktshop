<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">
<body>
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
        <a class="nav-link" href="#" style="color: #3ae5e7">Games<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #3ae5e7">Livros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #3ae5e7">Celulares</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #3ae5e7">Informática</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #3ae5e7">Roupas</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#" style="color: #3ae5e7">Eletronicos</a>
      </li>
     
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>





<div class="container">

<body>
<h1 class="display-4" style="text-align:center; padding-top: 50px ">Cadastre-se</h1>

<form method="POST" action="insert.php" style="padding-top: 40px">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" name="nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Endereço</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Endereço" name="endereco">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Data de nascimento</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="Data de nascimento" name="datan">
  </div>
  
 <div class="form-group">
    <label for="inputAddress2">CPF</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="CPF" name="cpf">
  </div>
 <div class="form-group">
    <label for="inputAddress2">Senha</label>
    <input type="password" class="form-control" id="inputAddress2" placeholder="Senha" name="senha">
  </div>
 <div class="form-group">
    <label for="inputAddress2">Email</label>
    <input type="email" class="form-control" id="inputAddress2" placeholder="Email" name="email">
  </div>


  <button type="submit" class="btn btn-primary">Sign in</button>
</form>






</div>




</div>


  </body>
</html>