<!DOCTYPE html>
<html>
<body>

<!-- AQUI VAMOS TRATAR AS MENSAGENS RECEBIDAS --> 
<?php

// ---- MENSAGEMS DO grava_dados.php e connect_db_config.php  
	$tipo =0; 
	if (isset($_SESSION['mensagem_erro_conexao'])): 
		$mensagemCad = $_SESSION['erro_conexao'];
		$tipo =1;
	elseif (isset($_SESSION['mensagem'][1])): 
		$mensagemCad = $_SESSION['mensagem'][1];
		$tipo =2;
	elseif (isset($_SESSION['mensagem'][2])): 
		$mensagemCad = $_SESSION['mensagem'][2];
		$tipo =3;
	endif;

	if (isset($mensagemCad)):
		if ($tipo==1):
			echo
			"<div class='mens-cadastro alert alert-danger mensagem' role='alert'>";
		elseif ($tipo==2):
			echo 
			"<div class='mens-cadastro alert alert-success mensagem' role='alert'>";
		elseif ($tipo==3):
			echo 
			"<div class='mens-cadastro alert alert-warning mensagem' role='alert'>";
		endif;
		if ($tipo <> 2):
			echo "		<h4> <strong> Atencao...! </strong>".$mensagemCad."</h4>";
		else:
			echo "		<h4>".$mensagemCad."</h4>";
		endif;
		echo "</div>";

	endif;

?>

</body>
</html>