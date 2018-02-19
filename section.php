<!doctype html>
<html lang="pt-br">



<div class="container">


<body>

   <div class="row" >
<div>
<?php
include "conexao.php";

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){
   

    echo'

    
 
    <div class="card-droup" style="padding-top: 60px; ">
     <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="'.$row['foto'].'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">'.$row['nome'].'</h5>
    <p class="card-text">Editora:   '.$row['editora'].'</p>
      <p class="card-text">Autor :   '.$row['autor'].'</p>
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




</html>







