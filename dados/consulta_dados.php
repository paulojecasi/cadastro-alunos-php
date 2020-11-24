<?php

include_once 'connect_db_config.php';
	
$consulta = "SELECT * from alunos_curso "; 
$consulta_alunos  = $connect->query($consulta) or die($connect->error); 

mysqli_close($connect);

