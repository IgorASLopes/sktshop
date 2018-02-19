<?php
	include "conexao.php";

	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$datan = $_POST['datan'];

	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];

	$sql = "INSERT INTO cliente (nome, datan, endereco, cpf, senha, email) VALUES ('$nome', '$endereco', '$datan','$cpf', '$senha', '$email')";

	if ($conn->query($sql) === TRUE){
	echo "usuário inserido com sucesso";
	header('location: index.php');
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>