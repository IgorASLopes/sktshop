<?php 
	session_start();
	session_destroy();

	echo "Desconectado com sucesso!";
	header("Refresh: 2, index.php");
?>