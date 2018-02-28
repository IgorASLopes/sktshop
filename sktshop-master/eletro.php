<?php
include 'header.php';
?>

<!doctype html>
<html lang="pt-br">



<div class="container">





   <div class="row">
   
<?php
include "conexao.php";

$sql = "SELECT * FROM eletro";
$result = $conn->query($sql);
if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){
   

    echo'
 <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
    

    <div class="card-droup" style="padding-top: 60px; border-radius:50px ">
     <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="'.$row['foto'].'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">'.$row['nome'].'</h5>

        <p class="card-text">preço:   '.$row['preco'].'</p>
        <center> <a href="#" class="btn btn-outline-info">Add ao carrinho</a></center>

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
  </body>


</div>


<?php
include 'footer.php';
?>


</html>






