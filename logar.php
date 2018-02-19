<?php
include "conexao.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cliente where cpf='$cpf' AND senha='$senha'";

$result = $conn->query($sql);

if($result->num_rows > 0){


   

    echo "você foi conectado";
    header('location: index.php');
;







} else{
  echo "0 resultados";
}
$conn->close();

?>








