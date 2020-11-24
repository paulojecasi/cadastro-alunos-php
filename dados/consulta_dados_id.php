<?php

include_once 'connect_db_config.php';
	
// procurar dados do aluno 	
if (isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);
	$consulta_id_sql = "SELECT * from alunos_curso WHERE id ='$id'"; 
	$resultado_consulta  = mysqli_query($connect, $consulta_id_sql);
	$dados_consulta = mysqli_fetch_array($resultado_consulta);

	// carregar variaveis para utilizar no 'editarDadosAluno.php'
	$nome_edit  = $dados_consulta['nome']; 
	$curso_edit = $dados_consulta['curso'];
	$matricula_edit = $dados_consulta['matricula'];  
	$status_edit = $dados_consulta['status'];
	$turno_edit  = $dados_consulta['turno'];  

	mysqli_close($connect);
endif;

?> 