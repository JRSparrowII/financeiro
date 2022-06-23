<?php  
	$conexao_bd = new mysqli("localhost",
	"root","","myfinances");

	if ($conexao_bd == true) {
		// echo "Conectado com sucesso";
	} else {
		echo "Conexão falhou";
	}

	$sql = "SELECT * FROM movimentacao";

	$result = mysqli_query($conexao_bd,$sql);

	// [{ nome: prisco, movimentcao},{}]
	foreach ($result as $valor) {
		$registros[] = $valor;
	}

	// echo json_encode($registros);

	// exit;

	// $SQL_CATEGORIAS = "SELECT * FROM CATEGORIAS";

	// $RESULT_SQL_CATEGORIAS = mysqli_query($conexao_bd,$SQL_CATEGORIAS);


?>	
<!DOCTYPE html>
<html>
<head>
	<title>Myfinances</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/
	bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

	<link rel="shortcut icon" href="favicon.png">
	<link rel="stylesheet" href="css/global.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/styles2.css">
</head>
<body>	
	<div class="container-header">
		<div class="content-header">
			<img src="assets/logo.svg">			

			<!-- Botão para acionar modal -->
			<button type="button"  data-toggle="modal" data-target="#modalExemplo">
			  Nova transação
			</button>
		</div>
	</div>

	<div class="main">
		<div class="content-main">
				<div class="item-dashboard">
					<div>
						<p>Entradas</p>
						<img src="assets/income.svg" alt="">
					</div>
					
					<strong >R$1000,00</strong>
				</div>

				<div class="item-dashboard">
					<div>
						<p>Saídas</p>
						<img src="assets/outcome.svg" alt="">
					</div>					
					<strong>R$-500,00</strong>
				</div>
				
				<div class="item-dashboard  hightlight" >
					<div>
						<p>Total</p>
						<img src="assets/total.svg" alt="">
					</div>					
					<strong>R$500,00</strong>
				</div>			
		</div>
		<div class="content-table">
			<table>
				<thead>
					<tr>
						<th>Título</th>
						<th>Valor</th>
						<th>Tipo Movimentação</th>
						<th>Categoria</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($result as $linha) {
						if ($linha['tipo_movimentacao'] == 'entrada'){
							echo "<tr>
									<td class='title'>".$linha['nome']."</td>
									<td class='entrada-cor'>".$linha['preco']."</td>
									<td>".$linha['tipo_movimentacao']."</td>
								 	<td>".$linha['categoria']."</td>
									<td>Excluir</td>
								  </tr>";	
						} else {
							echo "<tr>
									<td class='title'>".$linha['nome']."</td>
									<td class='saida-cor'>-".$linha['preco']."</td>
									<td>".$linha['tipo_movimentacao']."</td>
									<td>".$linha['categoria']."</td>
									<td>Excluir</td>
								  </tr>";	
						}
					}		
					?>
				</tbody>
			</table>
		</div>


		<!-- Modal -->
		<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Cadastrar transação</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
		        	<img src="assets/close.svg" alt="">
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form method="post" action="salvar.php">
		      		<div class="form-body-input">
		      			<div class="input">
		      				<input type="text" placeholder="Nome" name="nome">
		      			</div>
		      			<div class="input">
		      				<input type="number" placeholder="Valor" name="preco">
		      			</div>
		      			
			        	<div class="radio">
			        		<input type="radio" id="entrada" value="entrada" name="tipo_movimentacao">
			        		<label for="entrada">
			        			<img src="assets/income.svg" alt="">
			        			<span>Entrada</span>
			        		</label>

			        	
			        		<input type="radio" id="saida" value="saida" name="tipo_movimentacao">
			        		<label for="saida">
			        			<img src="assets/outcome.svg" alt="">
			        			<span>Saída</span>
			        		</label>
			        	</div>

						
						<select >
							
							
							<option value="">Selecione</option>
							<?php foreach ($RESULT_SQL_CATEGORIAS as $registro):?>
								
								<option value=""><?php echo $registro['NOME_CATEGORIA'] ?></option>
							<?php endforeach ?>
							
						</select>

			        	<div class="input">
		      				<input type="text" placeholder="Categoria" name="categoria">
		      			</div>
		      			<div class="cadastrar">
		      				<button type="submit" class="btn-cadastrar">Cadastrar</button>
		      			</div>			        
		      		</div>
		      	</form>
		      </div>
		      <!-- <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		        <button type="button" class="btn btn-primary">Salvar mudanças</button>
		      </div> -->
		    </div>
		  </div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  	
</body>
</html>