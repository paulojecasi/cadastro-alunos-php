<!DOCTYPE html>
<html>
<body>

<?php
	session_start(); 
	require_once 'cabecalho.php';
	require_once 'enums.php';

?>

<!-- AQUI VAMOS TRATAR AS MENSAGENS RECEBIDAS --> 

<?php 	if (isset($_SESSION['mensagem_erro_conexao'])): ?>
			<div class="alert alert-danger mensagem" role="alert">
				<h4> <strong> Atencao!... </strong>
				<?php echo $_SESSION['mensagem_erro_conexao']; ?> </h4>
			</div>	
<?php
		endif;
?>

<?php 	if (isset($_SESSION['mensagem'])): ?>
			<div class="alert alert-success mensagem" role="alert">
				<h4> <?php echo $_SESSION['mensagem']; ?> </h4>
			</div>	
<?php 	elseif (isset($_SESSION['mensagem_erro'])): ?>
			<div class="alert alert-warning mensagem" role="alert">
				<h4> <strong> Atencao!... </strong>
					 <?php echo $_SESSION['mensagem_erro']; ?>
				</h4>
			</div>	

<?php
		endif;
		session_unset();
?>


	<div class="container">
	
		<h4>+ Inserir Alunos </h4>
		<hr>
		
			<!-- 				Nome do Aluno -->
		
			<form method="POST" action="dados/grava_dados.php" >
				<div class="row">
					<div class="col-md-6 form-group offset-md-2"> 
						<label> Nome do Aluno: </label>
						<input class="form-control" placeholder="Ex: Evelyn Cardoso"
								name="nome">
					</div>
				</div>
				
				<!-- 				Tipo de Curso -->
				
				<div class="row">
					<div class="col-md-6 form-group offset-md-2"> 
						<label> Selecione o Curso: </label>
						<select class="form-control" name="curso"> 

							<?php foreach ($tipo_curso as $curso): ?>
								<option value = "<?php echo $curso ?>">
								 	<?php echo $curso ?> 
								</option>
							<?php endforeach; ?> 
							 
						
						</select>
					</div>
				</div>
				
				<!-- 				Gerar Matricula -->
				<div class="row">
					<div class="col-md-6 form-group offset-md-2"> 
						<label> Matricula: </label>
						<input class="form-control" id="matricula" 
								readonly=“true” name="matricula">
						<button class= "btn btn-dark"
								style="margin-top: 10px"
								type = "button"
								onclick="GerarMatricula();"> 
								Gerar Matricula
						</button>
					</div>
				</div>
				
				<!-- 				Status -->
				<div class="row">
					<div class="col-md-6 form-group offset-md-2"> 
						<label> Status: </label>
						<select class="form-control" name="status"> 
							<?php foreach ($status as $st): ?>
								<option value = "<?php echo $st ?>">
								 	<?php echo $st ?> </option>
								<?php endforeach; ?> 
						
						</select>
					</div>
				</div>
				
				<!-- 				Turno -->
				<div class="row">
					<div class="col-md-6 form-group offset-md-2"> 
						<label> Turno: </label>
						<select class="form-control" name="turno"> 
							<?php foreach ($turno as $tr): ?>
								<option value="<?php echo $tr ?>"> 
									<?php echo $tr ?> </option>
								<?php endforeach; ?> 
						
						</select>
					</div>
				</div>
				
				<div class="row bt-salvar-voltar">
					<button type="submit" class="botao-form btn btn-success offset-md-3"
						name = "botao-salvar" href="#">
					 	Salvar
					 </button>
					 
					 <a href="index.php"> 
					 	<button type="button" class="botao-form btn btn-outline-danger offset-md-1">
					 		Voltar
					 	</button>
					 </a>
				</div>
				
			</form>
		
	</div>
	
<?php
	require_once 'rodape.php';
?>
</body>
</html>