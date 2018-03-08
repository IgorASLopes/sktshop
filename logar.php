<?php
session_start();
include "conexao.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cliente where cpf='$cpf' AND senha='$senha'";

$result = $conn->query($sql);

	if ($result-> num_rows > 0){
		while($row = $result -> fetch_assoc())
		{
	 	$_SESSION['nome1'] = $row['nome'];
	 	$_SESSION['datan'] = $row['datan'];
		
		
	 			header('refresh: 3, index.php');

				echo "ta indo rapaz confio em tu <3";
			

	 } 
	}

	 $conn -> close();

	
?>








