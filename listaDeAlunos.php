<!DOCTYPE html>
<html>
<body>

<?php
	require_once 'cabecalho.php';
	require_once 'enums.php';
	require_once 'dados/consulta_dados.php';
?>


<div class="container-listagem">	
		<h4 class ="offset-md-1"> Listagem de Alunos</h4>
		<hr>
		<table class="table table-bordered table-hover">
			<thead>
				<th scope="col"> Nome </th>
				<th scope="col"> Curso </th>
				<th scope="col"> Matricula </th>
				<th scope="col"> Status </th>
				<th scope="col"> Turno </th>
				<th scope="col"> Ação </th>
			</thead>
			<tbody>
				<?php while ($dados_aluno=$consulta_alunos->fetch_array()): ?> 
					<tr scope="row" class="container-tr">
						<td> <?php echo $dados_aluno['nome']; ?> </td>
						<td> <?php echo $dados_aluno['curso']; ?> </td>
						<td> <?php echo $dados_aluno['matricula']; ?> </td>
						<td> <?php echo $dados_aluno['status']; ?> </td>
						<td> <?php echo $dados_aluno['turno']."<br>"; ?> </td>
						
					
						<td class="container-btn-manutencao">
							<a class="btn btn-primary bt-manutencao"
								href="editarDadosAluno.php?id=
									<?php echo $dados_aluno['id']; ?>"> 
								<i class="fas fa-edit"></i> 
								Editar 
							</a>
							<a class="btn btn-danger bt-manutencao" > 
								<i class="fas fa-times"></i> 
								Excluir 
							</a>
						</td>
					</tr>
				<?php endwhile; ?> 
			
			</tbody>
		
		
		</table>

		
	
	</div>

	
<?php
	require_once 'rodape.php';
?>
</body>
</html>