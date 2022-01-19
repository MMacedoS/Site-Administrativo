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
								<input type="text" class="form-control" id="nome_usu" name="nome_usu" placeholder="Insira o Nome" value="<?php echo $_SESSION['nome'] ?>" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">CPF</label>
								<input type="text" class="form-control" id="cpf_usu" name="cpf_usu" placeholder="Insira o CPF" value="<?php echo $_SESSION['cpf'] ?>" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Email</label>
								<input type="email" class="form-control" id="email_usu" name="email_usu" placeholder="Insira o Email" value="<?php echo $_SESSION['email'] ?>" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Senha</label>
								<input type="text" class="form-control" id="senha_usu" name="senha_usu" placeholder="Insira a Senha" value="<?php echo $_SESSION['id_pessoa'] ?>" required>
							</div>
						</div>

						<input type="hidden" name="id_usu" value="<?php echo @$id_usuario ?>">

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




<!-- Mascaras JS -->
<script type="text/javascript" src="<?=ROTA_GERAL?>/view/js/mascaras.js"></script>

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