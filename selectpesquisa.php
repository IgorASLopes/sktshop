<?php
	include "conexao.php";

	$nome = $_POST['nome'];


	$sql = "SELECT * FROM produtos WHERE nome = '$nome'";

$result = $conn->query($sql);
if($result->num_rows > 0){



   //lembra dessa poha namoral 
   header('location: pesquisado.php?nome='.$nome);
    echo "GO!";
 









} else{
  echo "0 resultados";
}
$conn->close();

?>