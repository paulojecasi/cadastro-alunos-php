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
		<section class="pj-section" style="background-image: url('img/bg-index.jpg');"> 
	
		<div class="sombra"></div>
		
		<div class="pj-container center"> 
			<h2 class="texto-indice"> Sistema de Gerenciamento de Alunos </h2>
		
			<div class="botoes">
				<div class="bt" id="bt-cadastrar">
					<a href="cadastrarAluno.php" > 
						<button class="btn btn-primary"> CADASTRAR ALUNO </button>
					</a>
					
				</div>

				<div class="bt" id="bt-buscar">
					<button class="btn btn-success"> BUSCAR ALUNO </button>
				</div>
				
				<div class="limpar"> </div>

			</div>
		</div>
		
	</section>

<?php
	require_once 'rodape.php';
?> 

</body>
</html>