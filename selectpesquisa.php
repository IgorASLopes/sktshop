<?php
	include "conexao.php";

	$nome = $_POST['nome'];


	$sql = "SELECT * FROM games WHERE nome = '$nome'";

	$result = $conn->query($sql);

if($result->num_rows > 0){


   

    echo "você foi conectado";
header(lacation:"produto.php")
;







} else{
  echo "0 resultados";
}
$conn->close();

?>