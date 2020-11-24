<!DOCTYPE html>
<html>
<body>

<!-- AQUI VAMOS TRATAR AS MENSAGENS RECEBIDAS --> 
<?php

session_start();

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
		echo "		<h4> <strong> Atencao...! </strong>".$mensagemCad."</h4>";
		echo "</div>";

	endif;


	// ---- MENSAGEMS DO upload.php 

	$tipo =0; 
	if (isset($_SESSION['upload_ok'])): 
		$mensagemUp = $_SESSION['upload_ok'];
		$tipo=1;
	elseif (isset($_SESSION['upload_ok'])):  
		$mensagemUp = $_SESSION['upload_erro'];
		$tipo=2;
	endif; 

	if (isset($mensagemUp)):
		echo 
		"<div class='col-md-8 form-group offset-md-0 mensagem-campos'>";
		if ($tipo ==1);
			echo "<div class ='alert alert-success'>";
			echo 	"<h3>".$mensagemUp."</h3>";  
			echo "</div>";
		elseif ($tipo ==2):
			echo "<div class ='alert alert-warning'>";
			echo 	"<h3>".$mensagemUp."</h3>";  
			echo "</div>";	
		endif;
		echo 
		"</div>"; 


	session_unset();

?>

</body>
</html>