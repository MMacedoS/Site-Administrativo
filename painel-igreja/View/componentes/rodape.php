
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








<div class="modal fade" id="modalRelMembros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Relatório de Membros</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="post" action="../rel/relMembros.php" target="_blank">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Cargo / Membros</label>
									<select class="form-select form-select-sm" aria-label="Default select example" name="cargo">  
										<option value="">Todos</option>

										<?php 
									$res=$this->getCargos();
									$total_reg = count($res);
									if($total_reg > 0){

										for($i=0; $i < $total_reg; $i++){
											foreach ($res[$i] as $key => $value){} 

												$nome_reg = $res[$i]['nome'];
											$id_reg = $res[$i]['id'];
											?>
											<option value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>

										<?php }} ?>

									</select>
								</div>
						</div>
						

						<div class="col-md-4">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Status</label>
									<select class="form-select form-select-sm" aria-label="Default select example" name="status">  
										<option value="">Todos</option>
										<option value="Sim">Ativo</option>
										<option value="Não">Inativo</option>
									</select>
								</div>
						</div>

						<div class="col-md-4">
							
						</div>

						<input type="hidden" name="igreja" value="<?php echo $id_igreja ?>">
					</div>

					
				</div>
			
			<small><div align="center" id="msg-config"></div></small>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-config">Fechar</button>
				<button type="submit" class="btn btn-primary">Gerar Relatório</button>
			</div>
		</form>
	</div>
</div>
</div>






<div class="modal fade" id="modalRelPatrimonios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Relatório de Patrimônios</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="post" action="../rel/relPatrimonio.php" target="_blank">
				<div class="modal-body">
					<div class="row">

						<div class="col-md-4">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Itens</label>
									<select class="form-select form-select-sm" aria-label="Default select example" name="itens">  
										<option value="">Todos</option>
										<option value="1">Pertencentes a Igreja</option>
										<option value="2">Emprestados a Outros</option>
										<option value="3">Itens de Outras Igrejas</option>
									</select>
								</div>
						</div>

						<div class="col-md-4">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Status</label>
									<select class="form-select form-select-sm" aria-label="Default select example" name="status">  
										<option value="">Todos</option>
										<option value="Sim">Ativo</option>
										<option value="Não">Inativo</option>
									</select>
								</div>
						</div>

						<div class="col-md-4">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Compra / Doação</label>
									<select class="form-select form-select-sm" aria-label="Default select example" name="entrada">  
										<option value="">Todos</option>
										<option value="Compra">Compra</option>
										<option value="Doação">Doação</option>
									</select>
								</div>
						</div>

						<input type="hidden" name="igreja" value="<?php echo $id_igreja ?>">
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Data Inicial <small><small>(
										<a href="#" class="text-primary" onclick="datas('1980-01-01', 'tudo-pat', 'pat')">
											<span id="tudo-pat">Tudo</span>
										</a> / 
									<a href="#" class="text-dark" onclick="datas('<?php echo $data_atual ?>', 'hoje-pat', 'pat')">
											<span id="hoje-pat">Hoje</span>
										</a> /
										<a href="#" class="text-dark" onclick="datas('<?php echo $data_mes ?>', 'mes-pat', 'pat')">
											<span id="mes-pat">Mês</span>
										</a> /
										<a href="#" class="text-dark" onclick="datas('<?php echo $data_ano ?>', 'ano-pat', 'pat')">
											<span id="ano-pat">Ano</span>
										</a> 
									)</small></small></label>
									<input type="date" class="form-control form-control-sm" name="dataInicial" id="dtInicial-pat" value="1980-01-01">
								</div>
						</div>

						<div class="col-md-4">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Data Final</label>
									<input type="date" class="form-control form-control-sm"  name="dataFinal" id="dtFinal-pat" value="<?php echo $data_atual ?>">
								</div>
						</div>


					</div>

					
				</div>
			
			<small><div align="center" id="msg-config"></div></small>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-config">Fechar</button>
				<button type="submit" class="btn btn-primary">Gerar Relatório</button>
			</div>
		</form>
	</div>
</div>
</div>







<div class="modal fade" id="modalRelFinanceiro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Relatório Financeiro <small><small>(
										<a href="#" class="text-primary" onclick="datas('1980-01-01', 'tudo-fin', 'fin')">
											<span id="tudo-fin">Tudo</span>
										</a> / 
									<a href="#" class="text-dark" onclick="datas('<?php echo $data_atual ?>', 'hoje-fin', 'fin')">
											<span id="hoje-fin">Hoje</span>
										</a> /
										<a href="#" class="text-dark" onclick="datas('<?php echo $data_mes ?>', 'mes-fin', 'fin')">
											<span id="mes-fin">Mês</span>
										</a> /
										<a href="#" class="text-dark" onclick="datas('<?php echo $data_ano ?>', 'ano-fin', 'fin')">
											<span id="ano-fin">Ano</span>
										</a> 
									)</small></small></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="post" action="../rel/relFinanceiro.php" target="_blank">
				<div class="modal-body">
					<div class="row">

						
						<div class="col-md-3">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Movimento</label>
									<select class="form-select form-select-sm" aria-label="Default select example" name="movimento" id="movim">  
										<option value="">Todos</option>
										<option value="Conta">Contas à Pagar</option>
										<option value="Dízimo">Dízimos</option>
										<option value="Oferta">Ofertas</option>
										<option value="Doação">Doações</option>
										<option value="Venda">Vendas</option>
									</select>
								</div>
						</div>


						<div class="col-md-3">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Entradas / Saídas</label>
									<select class="form-select form-select-sm" aria-label="Default select example" name="tipo" id="tip">  
										<option value="">Todas</option>
										<option value="Entrada">Entradas</option>
										<option value="Saída">Saídas</option>
										
									</select>
								</div>
						</div>

						<div class="col-md-3">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Data Inicial </label>
									<input type="date" class="form-control form-control-sm" name="dataInicial" id="dtInicial-fin" value="1980-01-01">
								</div>
						</div>

						<div class="col-md-3">
							<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Data Final</label>
									<input type="date" class="form-control form-control-sm"  name="dataFinal" id="dtFinal-fin" value="<?php echo $data_atual ?>">
								</div>
						</div>

						<input type="hidden" name="igreja" value="<?php echo $id_igreja ?>">
					</div>

										
				</div>
			
			<small><div align="center" id="msg-config"></div></small>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-config">Fechar</button>
				<button type="submit" class="btn btn-primary">Gerar Relatório</button>
			</div>
		</form>
	</div>
</div>
</div>




<!-- Mascaras JS -->
<script type="text/javascript" src="<?=ROTA_JS?>/mascaras.js"></script>

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


<script type="text/javascript">
	function datas(data, id, campo){
		var data_atual = "<?=$data_atual?>";
		$('#dtInicial-'+campo).val(data);
		$('#dtFinal-pat'+campo).val(data_atual);

		document.getElementById('hoje-'+campo).style.color = "#000";
		document.getElementById('tudo-'+campo).style.color = "#000";
		document.getElementById('mes-'+campo).style.color = "#000";
		document.getElementById('ano-'+campo).style.color = "#000";
		document.getElementById(id).style.color = "blue";		
	}
</script>


<script type="text/javascript">
	$(function(){
		$("#movim").change(function(){
			if($("#movim").val() != ""){
				document.getElementById("tip").options.selectedIndex = 0;
				$('#tip').val($('#tip').val()).change();
				document.getElementById('tip').disabled = true;
			}else{
				document.getElementById('tip').disabled = false;
			}
		})
	})
</script>