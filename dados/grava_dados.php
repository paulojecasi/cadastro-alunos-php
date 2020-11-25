<?php
	
	session_start(); 

	include_once 'connect_db_config.php';

	$id 	   = mysqli_escape_string($connect, $_POST["id"]);

	$nome      = mysqli_escape_string($connect, $_POST["nome"]);
	$curso     = mysqli_escape_string($connect, $_POST["curso"]);
	$matricula = mysqli_escape_string($connect, $_POST["matricula"]);
	$status    = mysqli_escape_string($connect, $_POST["status"]);
	$turno     = mysqli_escape_string($connect, $_POST["turno"]);

	//echo $nome ;
	//echo $curso;
	//echo $matricula;
	//echo $status;
	//echo $turno; 
	if (isset($_POST['botao-salvar']) or isset($_POST['botao-atualizar'])):
		$erro =0;
		if (empty($nome)):
			$_SESSION['nome']="* Campo NOME DO ALUNO precisa ser preenchido!";
			$erro =1;
		endif;
		if (empty($curso)):
			$_SESSION['curso']="* Campo CURSO precisa ser preenchido!";
			$erro =1;
		endif;
		if (empty($matricula)):
			$_SESSION['matricula']="* Campo MATRICULA precisa ser preenchido!";
			$erro =1;
		endif;
		if (empty($status)):
			$_SESSION['status']="* Campo STATUS precisa ser preenchido!";
			$erro =1;
		endif;
		if (empty($turno)):
			$_SESSION['turno']="* Campo TURNO precisa ser preenchido!";
			$erro =1;
		endif;

		if ($erro ==0):
			mysqli_select_db($connect,'$db_name');

			if (isset($_POST['botao-salvar'])):
				$sql= "INSERT INTO alunos_curso (curso,matricula,nome,status,turno) VALUES ('$curso','$matricula','$nome','$status','$turno')";

				if (mysqli_query($connect, $sql)):
					$_SESSION['mensagem'][1]="Dados Gravados Com Sucesso !";
				else:
					$_SESSION['mensagem'][2]="Erro ao Gravar Dados !";
				endif; 

			elseif (isset($_POST['botao-atualizar'])):
				$sql= "UPDATE alunos_curso SET 
						nome  		= '$nome',
						curso 		= '$curso',
						matricula 	= '$matricula',
						status 		= '$status',
						turno 		= '$turno' WHERE id = '$id'" ; 

				if (mysqli_query($connect, $sql)):
					$_SESSION['mensagem'][1]="Dados Atualizados Com Sucesso !" ;
				else:
					$_SESSION['mensagem'][2]="Erro ao Atualizar Dados !";
				endif; 

			endif;  
		endif; 
	endif; 

	mysqli_close($connect);
	if (isset($_POST['botao-salvar'])):
		header('location: ../cadastroDeAlunos.php'); 
	elseif (isset($_POST['botao-atualizar'])):
		header('location: ../listaDeAlunos.php'); 
	endif;
	

?>

