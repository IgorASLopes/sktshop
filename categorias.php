<?php
include 'header.php';
?>

<!doctype html>
<html lang="pt-br">



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




   <div class="row" >
<div>
<?php
include "conexao.php";
$games = $_GET['game'];
$sql = "SELECT * FROM produtos WHERE tipo = '$games' ";
$result = $conn->query($sql);
if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){
   

    echo'

    
 
    <div class="card-droup" style="padding-top: 60px; ">
     <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="'.$row['foto'].'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">'.$row['nome'].'</h5>
      <p class="card-text">Autor :   '.$row['classificacao'].'</p>
        <p class="card-text">Gênero:   '.$row['genero'].'</p>
  </div>
</div>



</div>
';





}

} else{
  echo "0 resultados";
}
$conn->close();






?>

</div>







</div>
  </body>



</div>


<?php
include 'footer.php';
?>


</html>






