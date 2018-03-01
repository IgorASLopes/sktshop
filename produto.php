<?php
include 'header.php'
?>

<?php
   <p>&nbsp;</p>
   <p>&nbsp;</p>
    

  echo ' <div class="card-droup" style="padding-top: 60px; border-radius:50px ">
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



<?php
include 'footer.php.php'
?>