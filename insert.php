<?php
	include "conexao.php";

	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$idade = $_POST['idade'];
	$telefone = $_POST['tel'];
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];

	$sql = "INSERT INTO cliente (nomeu, endereco, idade, telefone, cpf, senha, email) VALUES ('$nome', '$endereco', '$idade', '$telefone', '$cpf', '$senha', '$email')";

	if ($conn->query($sql) === TRUE){
	echo "usuário inserido com sucesso";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>