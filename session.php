tste


<?php
session_start();

if($_SESSION['logado'] == 1){
	echo  .$row['nome']. "é show";
}

else {
	echo "Você não está logado. Faça login para continuar.";
}

?>
