<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">


	<!-- meu css --> 
	<link rel="stylesheet" href="static/css/style.css">

	<!-- jquery 
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	-->

	<!-- bootstrap-->
	<link 	rel="stylesheet" 
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- jquery Local -->
	<script src="static/js/jquery-3.5.1.min.js"> </script>
	
	<!-- meu js -->
	<script src="static/js/myscripts.js"> </script>


	<!-- para icones  -->
	<script src="https://kit.fontawesome.com/006642858d.js"></script>

	
	<title> MANUTENÇÂO DE ALUNOS </title>

</head>
<body>
	<header class="fixed-top"> 
		<nav class="cabecalho navbar navbar-expand-lg navbar-dark">
			<a class="logo navbar-brand" >
		 		<!-- <img src="/static/img/logo-header-site.png"/> -->
		 		<?php
		 		  	echo "<img src='static/img/logo-header-site.png'/>";
		 		?>
		 	
			</a>
		 	
			<button class="navbar-toggler" 
		 		type="button"
		 		data-toggle="collapse"
		 		data-target="#navMobile">
				<span class="navbar-toggler-icon"></span>
		 			
			</button>
		 	
			<div id="navMobile" class="navbar-collapse collapse justify-content-end">
		 		<a class="nav-item nav-link" href="index.php">
		 			<i class="fas fa-home"></i>
		 			 Home
		 		</a>
		 		<a class="nav-item nav-link" href="cadastroDeAlunos.php">
		 			<i class="fas fa-user-graduate"></i>
		 			 Cadastrar Aluno
		 		</a>
		 		<a class="nav-item nav-link" href="listaDeAlunos.php">
		 			<i class="fas fa-search"></i> 
		 			Pesquisar Aluno
		 		</a>
		 		<a class="nav-item nav-link btn-danger">
		 			<i class="fas fa-times"></i>
		 			 Sair
		 		</a>
		 	
			</div>
	 
		</nav>
	</header>

</body>
</html>