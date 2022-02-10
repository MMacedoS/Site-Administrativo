</div>

</body>
</html>




<div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Dados</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="form-usu" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-8">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Nome</label>
								<input type="text" class="form-control" id="nome_usu" name="nome_usu" placeholder="Insira o Nome" value="<?php echo $nome_usu ?>" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">CPF</label>
								<input type="text" class="form-control" id="cpf_usu" name="cpf_usu" placeholder="Insira o CPF" value="<?php echo $cpf_usu ?>" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Email</label>
								<input type="email" class="form-control" id="email_usu" name="email_usu" placeholder="Insira o Email" value="<?php echo $email_usu ?>" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Senha</label>
								<input type="text" class="form-control" id="senha_usu" name="senha_usu" placeholder="Insira a Senha" value="<?php echo $senha_usu ?>" required>
							</div>
						</div>


						<div class="row">
							<div class="col-md-8">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Foto</label>
									<input type="file" class="form-control-file" id="imagem-usu" name="imagem" onChange="carregarImg2();">
								</div>
							</div>
							<div class="col-md-4">
								<div id="divImg" class="mt-4">
									<img src="../img/membros/<?php echo $foto_usu ?>"  width="100px" id="target-usu">									
								</div>
							</div>
						</div>


						<input type="hidden" name="id_usu" value="<?php echo $id_usuario ?>">

					</div>
				</div>
				<small><div align="center" id="msg-usu"></div></small>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-usu">Fechar</button>
					<button type="submit" class="btn btn-primary">Editar</button>
				</div>
			</form>
		</div>
	</div>
</div>






<div class="modal fade" id="modalConfig" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Configurações do Sistema</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="form-config" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Nome Igreja</label>
								<input type="text" class="form-control form-control-sm" id="nome_igr" name="nome_igr" placeholder="Nome da Igreja" value="<?php echo $nome_igr ?>" required>
							</div>
						</div>
						

						<div class="col-md-4">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Email Igreja</label>
								<input type="email" class="form-control form-control-sm" id="email_igr" name="email_igr" placeholder="Insira o Email Igreja" value="<?php echo $email_igr ?>" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Telefone Igreja</label>
								<input type="text" class="form-control form-control-sm" id="tel_igr" name="tel_igr" placeholder="Telefone da Igreja" value="<?php echo $tel_igr ?>" required>
							</div>
						</div>
					</div>


					<div class="row">

							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Endereço Igreja</label>
								<input type="text" class="form-control form-control-sm" id="end_igr" name="end_igr" placeholder="Endereço da Igreja" value="<?php echo $end_igr ?>" required>
							</div>
						
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Qtd Tarefas</label>
								<input type="number" class="form-control form-control-sm" id="qtd_tar_igr" name="qtd_tar_igr" value="<?php echo $quantidade_tarefas ?>" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Limitar Tesoureiro</label>
								<select class="form-select form-select-sm" name="limitar_tesoureiro">
									<option <?php if($limitar_tesoureiro == 'Sim'){ ?>selected <?php } ?> value="Sim">Sim</option>
									<option <?php if($limitar_tesoureiro == 'Não'){ ?>selected <?php } ?> value="Não">Não</option>
								</select>
							</div>
						</div>

						<div class="col-md-3">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Relatório PDF</label>
								<select class="form-select form-select-sm" name="relatorio_pdf">
									<option <?php if($relatorio_pdf == 'Sim'){ ?>selected <?php } ?> value="Sim">Sim</option>
									<option <?php if($relatorio_pdf == 'Não'){ ?>selected <?php } ?> value="Não">Não</option>
								</select>
							</div>
						</div>


						<div class="col-md-3">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Cabeçalho Rel Imagem</label>
								<select class="form-select form-select-sm" name="cabecalho_rel_img">
									<option <?php if($cabecalho_rel_img == 'Sim'){ ?>selected <?php } ?> value="Sim">Sim</option>
									<option <?php if($cabecalho_rel_img == 'Não'){ ?>selected <?php } ?> value="Não">Não</option>
								</select>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-md-3">
								<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Itens Por Página (Site)</label>
								<input type="number" class="form-control form-control-sm" id="itens_por_pagina" name="itens_por_pagina" value="<?php echo $itens_por_pagina ?>">
							</div>
						</div>
					</div>

					
				</div>
			
			<small><div align="center" id="msg-config"></div></small>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-config">Fechar</button>
				<button type="submit" class="btn btn-primary">Editar</button>
			</div>
		</form>
	</div>
</div>
</div>




<!-- Mascaras JS -->
<script type="text/javascript" src="../js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 


<script type="text/javascript">
	$("#form-usu").submit(function () {

		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: "editar-dados.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#msg-usu').text('');
				$('#msg-usu').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso") {

					$('#btn-fechar-usu').click();
					window.location="index.php";

				} else {

					$('#msg-usu').addClass('text-danger')
					$('#msg-usu').text(mensagem)
				}


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>


<script type="text/javascript">
	$("#form-config").submit(function () {

		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: "editar-config.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#msg-config').text('');
				$('#msg-config').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso") {

					$('#btn-fechar-config').click();
					window.location="index.php";

				} else {

					$('#msg-config').addClass('text-danger')
					$('#msg-config').text(mensagem)
				}


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>