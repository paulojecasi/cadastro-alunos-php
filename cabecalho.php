<!DOCTYPE html>
<html>
<body>
	<header th:fragment="cabecalho"> 
		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand" >
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
		 		<a class="nav-item nav-link" th:href="@{/}">
		 			<i class="fas fa-home"></i>
		 			 Home
		 		</a>
		 		<a class="nav-item nav-link" th:href="@{/inserirAluno}">
		 			<i class="fas fa-user-graduate"></i>
		 			 Cadastrar Aluno
		 		</a>
		 		<a class="nav-item nav-link">
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