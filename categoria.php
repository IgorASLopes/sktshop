<?php 
$nome = $_GET['cat'];

$sql = "SELECT * FROM games WHERE nome='$nome'";
$result = $conn->query($sql);
if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){
   

    echo'

    <div class="card-droup" style="padding-top: 60px; border-radius:50px ">
     <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="'.$row['foto'].'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">'.$row['nome'].'</h5>
      <p class="card-text">Classificação :   '.$row['classificacao'].'</p>
        <p class="card-text">Gênero:   '.$row['genero'].'</p>
        <p class="card-text">preço:   '.$row['preco'].'</p>
        <center> <a href="#" class="btn btn-outline-info">Add ao carrinho</a><a href="#" class="btn btn-outline-info">Ver mais</a></center>

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



 ?>