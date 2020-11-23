<?php

	// enums não são nativos do PHP, resolvi fazer dessa forma - PJCS 

	$tipo_curso = array("Analise de Sistemas",
						"Medicina",
						"Sistema de Informação",
						"Educacão Física",
						"Direito"); 
	sort($tipo_curso);

	$status = array("Aberto",
					"Trancado",
					"Cancelado",
					"Jubilado",
					"Concluido"); 
	sort($status);

	$turno = array( "Pre-Matutino",
					"Manhã",
					"Tarde",
					"Noite"); 


?>