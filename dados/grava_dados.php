<?php
	

	session_start(); 

	include_once 'connect_db_config.php';


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
	if (isset($_POST['botao-salvar'])):
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
			$sql= "INSERT INTO alunos_curso (curso,matricula,nome,status,turno) VALUES ('$curso','$matricula','$nome','$status','$turno')";

			if (mysqli_query($connect, $sql)):
				$_SESSION['mensagem'][1]="Dados Gravados Com Sucesso !";
			else:
				$_SESSION['mensagem'][2]="Erro ao Gravar Dados !";
			endif; 

		
		endif; 
	endif; 

	mysqli_close($connect);
	header('location: ../cadastroDeAlunos.php'); 
	

?>

