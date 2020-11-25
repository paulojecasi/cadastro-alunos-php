<!DOCTYPE html>
<html lang="pt-br">
<body>

<?php
	require_once 'cabecalho.php';
	require_once 'enums.php';
	require_once 'dados/consulta_dados.php';
	require_once 'mensagens/mens_cadastro.php';
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
						<a
							type="button" 
							class="btn btn-danger bt-manutencao" 
							data-toggle="modal"
							href="#modalExemplo"> 
							<i class="fas fa-times"></i> 
							Excluir 
						</a>
					</td>
				</tr>
			<?php endwhile; ?> 
		
		</tbody>
	</table>

	<!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
  Abrir modal de demonstração
</button>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>
	
</div>


<?php
	session_unset();
	require_once 'rodape.php';
?>
</body>
</html>