<!DOCTYPE html>
<html lang="pt-br">
<body>

<?php
	require_once 'cabecalho.php';
	require_once 'enums.php';
	require_once 'mensagens/mens_cadastro.php';
	require_once 'dados/consulta_dados_id.php'; 
?>


<div class="container-cadastro">

	<h4 class = "offset-md-1"> Editando Dados do Aluno </h4>
	<hr>

	<?php 	//-------- Aqui veremos se os campos obrigatorios foram preenchido
		require_once 'mensagens/mens_field_cadastro.php';
	?>

	<!-------------------UPLOADS de Foto do Aluno --------------------------->
	<div class= "row offset-md-2">
		<form action="dados/upload.php" method="POST"
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

	<form method="POST" action="dados/grava_dados.php" >
		<input name="id" type="hidden" value="<?php echo $id; ?>">
		<div class="row">
			<div class="col-md-6 form-group offset-md-2"> 
				<label> Nome do Aluno: </label>
				<input class="form-control" placeholder="Ex: Evelyn Cardoso"
						name="nome" 
						value = "<?php echo $nome_edit; ?>"
						required>
			</div>

		</div>
		

		<!-- 				Tipo de Curso ---------------------------->
		
		<div class="row">
			<div class="col-md-6 form-group offset-md-2"> 
				<label> Selecione o Curso: </label>
				<select class="form-control" name="curso"> 

					<option value = "<?php echo $curso_edit ?>">
						<?php echo $curso_edit ?>
					</option>

					<?php
					foreach ($tipo_curso as $curso): 
						if ($curso != $curso_edit):   // para nao repetir o enum 
							echo "<option value = $curso >";
						 	echo  	$curso; 
							echo "</option>";
						endif;
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
						readonly=“true” name="matricula"
						value = "<?php echo $matricula_edit; ?>"
						required>

			</div>
		</div>

		
		<!-- 				Status -->
		<div class="row">
			<div class="col-md-6 form-group offset-md-2"> 
				<label> Status: </label>
				<select class="form-control" name="status"> 

					<option value = "<?php echo $status_edit ?>">
						<?php echo $status_edit ?>
					</option>

					<?php
					foreach ($status as $st): 
						if ($st != $status_edit):   // para nao repetir o enum 
							echo "<option value = $st >";
						 	echo  	$st; 
							echo "</option>";
						endif;
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

					<option value = "<?php echo $turno_edit ?>">
						<?php echo $turno_edit ?>
					</option>

					<?php
					foreach ($turno as $tn): 
						if ($tn != $turno_edit):   // para nao repetir o enum 
							echo "<option value = $tn >";
						 	echo  	$tn; 
							echo "</option>";
						endif;
					endforeach;
					?>
				
				</select>
			</div>
		</div>
		
		<div class="row bt-salvar-voltar">
			<button type="submit" class="botao-form btn btn-success offset-md-3"
				name = "botao-atualizar" href="#" onClick="selector()">
			 	Atualizar
			 </button>
			 
			 <a href="listaDeAlunos.php"> 
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