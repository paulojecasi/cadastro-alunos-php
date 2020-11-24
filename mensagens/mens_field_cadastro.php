<!DOCTYPE html>
<html>
<body>

<!-- AQUI VAMOS TRATAR AS MENSAGENS RECEBIDAS --> 
<?php

	// ---- MENSAGEMS DO grava_dados.php - testa se os campos foram preenchidos

	$tipo =0; 
	if (isset($_SESSION['nome'])): 
		$mensagemFd = $_SESSION['nome'];
	elseif (isset($_SESSION['curso'])):  
		$mensagemFd = $_SESSION['curso'];
	elseif (isset($_SESSION['matricula'])):  
		$mensagemFd = $_SESSION['matricula'];
	elseif (isset($_SESSION['status'])):  
		$mensagemFd = $_SESSION['status'];
	elseif (isset($_SESSION['turno'])):  
		$mensagemFd = $_SESSION['turno'];
	endif; 

	if (isset($mensagemFd)):
		echo 
		"<div class='col-md-8 form-group offset-md-1 mensagem-campos'>";
		echo "<div class ='alert alert-warning'>";
		echo 	"<h3>".$mensagemFd."</h3>";  
		echo "</div>";	
		echo 
		"</div>"; 
	endif; 

?>

</body>
</html>