
<div class="container">
<div class="row">
<?php 
include 'header.php';
		

		if(!isset($_SESSION['carrinho'])){
			$_SESSION['carrinho'] = array();
		}
		//adicionar carrinho

		if(isset($_GET['acao'])){

			//adicionar carrinho
			if($_GET['acao'] == 'add'){
				$id = intval($_GET['id']);
				if(!isset($_SESSION['carrinho'] [$id])){
					$_SESSION['carrinho'] [$id] = 1;
				}else{
						$_SESSION['carrinho'] [$id] += 1;
				}
				}

				////////////////remover carrinho

				if ($_GET['acao'] == 'del') {
					$id = itval($_GET['id']);
					if (isset($_SESSION['carrinho'] [$id])) {
						unset($_SESSION['carrinho'] [$id]);
					}
				}
			}
		
	
 ?>
 <div class="col-md-4"></div>
					<center >
							<p>&nbsp;</p>
 						<table class="table" class="col-md-4"> 
 						 <caption>Carrinho de compras</caption>
 							 <thead class="thead-dark">
 	 							<th width="244">produto</th>
 	 		
 	 								<th width="89">preço</th>
 	 	
 	 									<th width="64">remover</th>


 	 </thead>
 	 			<form action="?acao=up" method="post">
 	 				<tfoot>
 	 					<td colspan="5"><input type="submit" value="atualizar carrinho"></td>
 	 					
 	 						<td colspan="5"><button><a href="index.php">Continue comprando</a></button></td>
 	 				</tfoot>
 	 				<tbody>


 	 						<?php 
 	 							if(count($_SESSION['carrinho']) == 0){

 	 								echo '<tr><td colspan="5">Não há produtos no carrinho</td><tr>';

 	 							}else{
include 'conexao.php';
 	 					foreach($_SESSION['carrinho'] as $id =>$qtd){
 	 					$sql = "SELECT * FROM produtos WHERE id= '$id'  ";
 	 					$result = $conn->query($sql);
 	 					while($row = $result -> fetch_assoc()){

 	 							$nome = $row['nome'];
 	 							$preco = $row['preco'];
 	 						

	 	 				echo '
	 	 					<tr>
	 	 					<td>'.$nome.'</td>
	 	 					<td>R$ '.$preco.'</td>
	 	 					<td><a href="?acao=del$id='.$id.' ">Remover</a></td>
	 	 					</tr>
									';
 	 								}
 	 							}
}

 	 						 ?>







 	 				</tbody>
 	 			</form>
 	 		</table>
 	 		</center>
 	 		</div>
 	 		</div>