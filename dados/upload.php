<?php


session_start();
if (isset($_POST['enviar-foto'])):
	// Array de formatos permitidos de arquivos
	$formatosPermitidos = array("png","jpeg","jpg","gif");

	//veremos a extensao do arquivo
	$verExtensaoDoArquivo = pathinfo($_FILES['arquivo']['name'],
			PATHINFO_EXTENSION);	

	// veremos de a extensão "$verExtensaoDoArquivo" 
	//       existe no array "$formatosPermitidos"
	if (in_array($verExtensaoDoArquivo, $formatosPermitidos)):
		$pasta = "uploads/";
		$temporario = $_FILES['arquivo']['tmp_name'];
		$novoNome = uniqid().".$verExtensaoDoArquivo";

		if (move_uploaded_file($temporario, $pasta.$novoNome)):
			$mensagem= "Upload Realizado com Sucesso !";
			$_SESSION['upload_ok']="UPLOAD Realizado com sucesso!";
		else:
			$mensagem= "Erro! Nao Foi Possivel Realizar o Upload";
			$_SESSION['upload_erro']="Não Foi Possivel Realizar o UPLOAD!  ERRO: ".move_uploaded_file;
		endif;
	else:
		$mensagem= "Formato do arquivo INVALIDO";
		$_SESSION['upload_erro']="Formato do arquivo INVALIDO!: .".$verExtensaoDoArquivo;
	endif; 

	echo "Mensagem: ".$mensagem;
	header('location: ../cadastroDeAlunos.php'); 
	 
endif;

?>