<!DOCTYPE html>
<html lang="pt-br">
<body>

<?php
	session_start();
	require_once 'cabecalho.php';
	require_once 'enums.php';
	require_once 'mensagens/mens_cadastro.php';
?>


<div class="container-cadastro">

	<h4 class = "offset-md-1">+ Inserir Alunos </h4>
	<hr>

	<?php 	//-------- Aqui veremos se os campos obrigatorios foram preenchido
		require_once 'mensagens/mens_field_cadastro.php';
	?>

	<!-------------------UPLOADS de Foto do Aluno --------------------------->
	<div class= "row offset-md-2">
		<form id = "form-foto" action="dados/upload.php" method="POST"
				enctype="multipart/form-data"> 
			<label> Adicione uma Foto do Aluno: </label> <br>
			<input class = "arquivo btn btn-light" type="file" name="arquivo"> 
			<button class= "bt-foto btn btn-primary" type="submit" name="enviar-foto"
					onclick="location.href ='cadastroDeAlunos.php'" >
				 Enviar Foto 
			</button>
		</form>

	</div>
	<?php
		require_once 'mensagens/mens_upload.php';
	?>

	<!------------------- 	Nome do Aluno --------------------------->

	<form id="form-aluno" method="POST" action="dados/grava_dados.php">
		<div class="row">
			<div class="col-md-6 form-group offset-md-2"> 
				<label> Nome do Aluno: </label>

				<input id="nome" class="form-control" placeholder="Ex: Evelyn Cardoso"
						name="nome" required="true">
			</div>

		</div>
		

		<!-- 				Tipo de Curso ---------------------------->
		
		<div class="row">
			<div class="col-md-6 form-group offset-md-2"> 
				<label> Selecione o Curso: </label>
				<select class="form-control" name="curso"> 

					<?php  // enum CURSO 
					foreach ($tipo_curso as $curso): 
						echo "<option value = $curso >";
					 	echo  	$curso; 
						echo "</option>";
					endforeach;
					?>
					 
				</select>
			</div>
		</div>
		
		<!-- 				Gerar Matricula ------------------------------->

		<div class="row">
			<div class="col-md-4 form-group offset-md-2"> 
				<label> Matricula: </label>
				<input class="form-control" id="matricula" 
						name="matricula" required="true">

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

					<?php  // enum STATUS
					foreach ($status as $st): 
						echo "<option value = $st >";
					 	echo  	$st; 
						echo "</option>";
					endforeach;
					?>
				
				</select>
			</div>
		</div>
		
		<!-- 				Turno -->
		<div class="row">
			<div class="col-md-6 form-group offset-md-2"> 
				<label> Turno: </label>
				<select class="form-control" name="turno"> 

					<?php    // enum TURNO 
					foreach ($turno as $tr): 
						echo "<option value = $tr >";
					 	echo  	$tr; 
						echo "</option>";
					endforeach;
					?>
				
				</select>
			</div>
		</div>
		
		<div class="row bt-salvar-voltar">
			<button type="submit" class="botao-form btn btn-success offset-md-3"
				name = "botao-salvar">
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
	session_unset();
	require_once 'rodape.php';
?>

</body>
</html>