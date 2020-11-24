<!DOCTYPE html>
<html>
<body>

<!-- AQUI VAMOS TRATAR AS MENSAGENS RECEBIDAS --> 
<?php

	// ---- MENSAGEMS DO upload.php 

	$tipo =0; 
	if (isset($_SESSION['upload_ok'])): 
		$mensagemUp = $_SESSION['upload_ok'];
		$tipo=1;
	elseif (isset($_SESSION['upload_erro'])):  
		$mensagemUp = $_SESSION['upload_erro'];
		$tipo=2;
	endif; 

	if (isset($mensagemUp)):
		echo 
		"<div class='col-md-4 form-group offset-md-2'>";
		if ($tipo ==1):
			echo "<div class ='alert alert-success'>";
			echo 	"<h3 class='mens-upload'>".$mensagemUp."</h3>";  
			echo "</div>";
		elseif ($tipo ==2):
			echo "<div class ='alert alert-warning'>";
			echo 	"<h3 class='mens-upload'>".$mensagemUp."</h3>";  
			echo "</div>";	
		endif;
		echo 
		"</div>"; 
	endif; 

?>

</body>
</html>