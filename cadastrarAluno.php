<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link 	rel="stylesheet" 
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="static/css/style.css">

	<title> CADASTRO DE ALUNOS </title>
</head>

<body>

<?php
	require_once 'cabecalho.php';
?>
	
	<div class="container">
	
		<h4>+ Inserir Alunos </h4>
		<hr>
		
			<!-- 				Nome do Aluno -->
		
			<form method="POST" action="/InsertAlunos" th:object="${addAluno}">
				<div class="row">
					<div class="col-md-6 form-group offset-md-2"> 
						<label> Nome do Aluno: </label>
						<input class="form-control" placeholder="Ex: Paulo Cardoso">
					</div>
				</div>
				
				<!-- 				Tipo de Curso -->
				
				<div class="row">
					<div class="col-md-6 form-group offset-md-2"> 
						<label> Selecione o Curso: </label>
						<select class="form-control"> 
							<option> 
							</option>
						
						</select>
					</div>
				</div>
				
				<!-- 				Gerar Matricula -->
				<div class="row">
					<div class="col-md-6 form-group offset-md-2"> 
						<label> Matricula: </label>
						<input class="form-control" id="matricula" 
								readonly=“true”>
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
						<select class="form-control"> 
							<option> 
							</option>
						
						</select>
					</div>
				</div>
				
				<!-- 				Turno -->
				<div class="row">
					<div class="col-md-6 form-group offset-md-2"> 
						<label> Turno: </label>
						<select class="form-control"> 
							<option > 
							</option>
						
						</select>
					</div>
				</div>
				
				<div class="row bt-salvar-voltar">
					<button type="submit" class="botao-form btn btn-success offset-md-3">
					 	Salvar
					 </button>
					 
					 <a href="#"> 
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