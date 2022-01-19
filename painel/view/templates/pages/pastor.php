<?php  require_once PATH_GERAL.'/view/templates/topo.php';
		 
           ?>
	



<div class="col-md-12 my-3">
	<a href="#" onclick="inserir()" type="button" class="btn btn-dark btn-sm">Novo Pastor</a>
</div>

<div class="tabela bg-light">
	<?php 


		?>

		<table id="example" class="table table-striped table-light table-hover my-4 my-4" style="width:100%">
			<thead>			
				<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th>Email</th>
					<th>Telefone</th>
					<th>Endereço</th>
					<th>Ações</th>
				</tr>		
			</thead>
			<tbody>
			
				
					<?php foreach($this->pastores as $key=>$value){
						?>
					<tr>
						<td><?php echo @$value['nome'] ?></td>
						<td><?php echo @$value['cpf'] ?></td>
						<td><?php echo @$value['email'] ?></td>
						<td><?php echo @$value['telefone'] ?></td>
						<td><?php echo @$value['endereco'] ?></td>
						<td>
							<a href="#" onclick="editar('<?php echo @$value['id'] ?>', '<?php echo @$value['nome'] ?>', '<?php echo @$value['cpf'] ?>', '<?php echo @$value['email'] ?>', '<?php echo @$value['telefone'] ?>', '<?php echo @$value['endereco'] ?>')" title="Editar Registro">	<i class="bi bi-pencil-square text-primary"></i> </a>
							<a href="#" onclick="excluir('<?php echo @$value['id'] ?>' , '<?php echo @$value['nome']?>')" title="Excluir Registro">	<i class="bi bi-trash text-danger"></i> </a>
						</td>
					</tr>	
					<?php }?>
			</tbody>
		</table>

</div>


<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tituloModal"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="form" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-8">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Nome</label>
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o Nome" required>
								<input type="hidden" class="form-control" id="id_editar" name="id_editar" placeholder="Insira o Nome" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">CPF</label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira o CPF"  required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Insira o Email" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Telefone</label>
								<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Insira o Telefone" required>
							</div>
						</div>


					</div>

					<div class="row">

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Endereço</label>
							<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Insira o Endereço">
						</div>

					</div>

					
				</div>
				<small><div align="center" id="mensagem"></div></small>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar">Fechar</button>
					<button type="submit" class="btn btn-primary" id="button">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
</div>





<!-- Modal -->
<div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><span id="tituloModal">Excluir Registro</span></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="form-excluir" method="post">
				<div class="modal-body">

					Deseja Realmente excluir este Registro: <span id="nome-excluido"></span>?

					<small><div id="mensagem-excluir" align="center"></div></small>

					<input type="hidden" class="form-control" name="id-excluir"  id="id-excluir">


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-excluir">Fechar</button>
					<button type="submit" class="btn btn-danger">Excluir</button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php require_once PATH_GERAL.'/view/templates/rodape.php'; ?>

<script type="text/javascript">var pag = "<?=ROTA_GERAL?>/Pastor/"; </script>

<script src="<?=ROTA_GERAL?>/view/js/ajax.js"></script>

<script type="text/javascript">
	function editar(id, nome, cpf, email, telefone, endereco){
	$('#id_editar').val(id);
	$('#nome').val(nome);
	$('#email').val(email);
	$('#cpf').val(cpf);
	$('#telefone').val(telefone);
	$('#endereco').val(endereco);
		
	$('#tituloModal').text('Editar Registro');
	$('#button').text("Atualizar");
	var myModal = new bootstrap.Modal(document.getElementById('modalForm'), {		});
	myModal.show();
	$('#mensagem').text('');
}



</script>

