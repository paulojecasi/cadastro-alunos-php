<!DOCTYPE html>
<html>
<body>

<?php
	require_once 'cabecalho.php';
?> 
	
	<section class="pj-section" style=" "> 
		<div class="sombra"></div>
		
		<div class="pj-container center"> 
			<h2 class="texto-indice"> Sistema de Gerenciamento de Alunos </h2>
		
			<div class="botoes">
				<div class="bt" id="bt-cadastrar">
					<a href="cadastroDeAlunos.php" > 
						<button class="btn btn-primary"> CADASTRAR ALUNO </button>
					</a>
					
				</div>

				<div class="bt" id="bt-buscar">
					<a href="listaDeAlunos.php" > 
						<button class="btn btn-success"> BUSCAR ALUNO </button>
					</a>
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