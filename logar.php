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
	 	$_SESSION['nome'] = $row['nome'];

		
		
	 			header('refresh: 0, index.php');
				echo $row['nome'];
			

	 } 
	}

	 $conn -> close();

	
?>








