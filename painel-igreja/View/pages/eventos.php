<?php 
require_once("verificar.php");
require_once("deslogar-tesoureiro.php");
$pagina = 'eventos';

?>
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<div class="row my-3" style="margin-right:20px">
	<div class="col-md-2">
		<a href="#" onclick="inserir()" type="button" class="btn btn-dark btn-sm">Novo Evento</a>
	</div>

	
</div>

<div class="tabela bg-light">
	<?php 


	$res = $this->getEventos($id_igreja);
	$total_reg = count($res);
	if($total_reg > 0){

		?>

		<table id="example" class="table table-striped table-light table-hover my-4 my-4" style="width:100%">
			<thead>			
				<tr>
					<th>Título</th>
					<th class="esc">Data Evento</th>
					<th class="esc">Cadastrado Por</th>
					<th class="esc">Foto</th>
					<th class="d-none">Ativo</th>					
					<th>Ações</th>
				</tr>		
			</thead>
			<tbody>
				<?php 
				for($i=0; $i < $total_reg; $i++){
					foreach ($res[$i] as $key => $value){} 

						$titulo = $res[$i]['titulo'];
					$subtitulo =  $res[$i]['subtitulo'];
					$descricao1 = $res[$i]['descricao1'];					
					$data_cad = $res[$i]['data_cad'];
					$data_evento = $res[$i]['data_evento'];
					$usuario = $res[$i]['usuario'];
					$imagem = $res[$i]['imagem'];
					$video = $res[$i]['video'];
					$ativo = $res[$i]['ativo'];
					$igreja = $res[$i]['igreja'];
					$obs = $res[$i]['obs'];
					$id = $res[$i]['id'];
					$banner = $res[$i]['banner'];
					$tipo = $res[$i]['tipo'];
					$pregador = $res[$i]['pregador'];


					
					if($ativo == 'Sim'){
						$classe = 'text-success';
						$ativo = 'Desativar Item';
						$icone = 'bi-check-square';
						$ativar = 'Não';
						$inativa = '';
						$tab = 'Ativo';

					}else{
						$classe = 'text-danger';
						$ativo = 'Ativar Item';
						$icone = 'bi-square';
						$ativar = 'Sim';
						$inativa = 'text-muted';
						$tab = 'Inativo';
					}

					
					$res_con = $this->getUsuario($usuario);
					if(count($res_con) > 0){
						$nome_usu_cad = $res_con[0]['nome'];
					}else{
						$nome_usu_cad = '';
					}

					if($obs != ""){
						$classe_obs = 'text-warning';
					}else{
						$classe_obs = 'text-secondary';
					}



					$data_cadF = implode('/', array_reverse(explode('-', $data_cad)));
					$data_eventoF = implode('/', array_reverse(explode('-', $data_evento)));
					
					?>			
					<tr class="<?php echo $inativa ?> ">
						<td><?php echo $titulo ?></td>
						<td class="esc"><?php echo $data_eventoF ?></td>
						<td class="esc"><?php echo $nome_usu_cad ?></td>
												
						<td class="esc"><img src="<?=ROTA_IGREJA?>/img/eventos/<?php echo $imagem ?>" width="30px"></td>

						<td class="d-none"><?php echo $tab ?></td>
						
						<td>
							<big>
								<a href="#" onclick="editar('<?=@$id ?>')" title="Editar Registro">	<i class="bi bi-pencil-square text-primary"></i> </a>

								<a href="#" onclick="excluir('<?php echo $id ?>' , '<?php echo $titulo ?>')" title="Excluir Registro">	<i class="bi bi-trash text-danger"></i> </a>

								<a href="#" onclick="dados('<?php echo $id ?>')" title="Ver Dados">	<i class="bi bi-info-square-fill text-primary"></i> </a>

								<a href="#" onclick="obs('<?php echo $id ?>','<?php echo $titulo ?>', '<?php echo $obs ?>')" title="Observações">	<i class="bi bi-chat-right-text <?php echo $classe_obs ?>"></i> </a>

								<a href="#" onclick="mudarStatus('<?php echo $id ?>', '<?php echo $ativar ?>')" title="<?php echo $ativo ?>">
									<i class="bi <?php echo $icone ?> <?php echo $classe ?>"></i></a>
							

								</big>

							</td>
						</tr>	
					<?php } ?>	
				</tbody>
			</table>
		<?php }else{
			echo 'Não Existem Dados Cadastrados';
		} ?>
	</div>


	<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tituloModal"></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form id="formEvernto" method="post">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-9">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Título <small><small> (Max 60 Caracteres)</small></small></label>
									<input maxlength="60" type="text" class="form-control" id="titulo" name="titulo" placeholder="Título do Evento"  required>
								</div>
							</div>
								<div class="col-md-3">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Data do Evento</label>
									<input type="date" class="form-control" id="data_evento" name="data_evento" required value="<?php echo date('Y-m-d') ?>">
								</div>
							</div>
						</div>
						
								


						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">SubTítulo <small><small>(Se ouver) </small></small></label>
							<textarea type="text" class="form-control" id="subtitulo" name="subtitulo" ></textarea>
						</div>
							

						

						<div class="row">

						

							<div class="col-md-6">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Vídeo <small><small><small>(Se ouver, colocar o link da url incorporada do youtube) </small></small></small></label>
									<input type="text" class="form-control" id="video" name="video" placeholder="Url do video">
								</div>
							</div>

							<div class="col-md-3">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Evento / Pregação/Noticias</label>
								<select class="form-select" id="tipo" name="tipo">
									<option value="Evento">Evento</option>
									<option value="Pregação">Pregação</option>
									<option value="Noticia">Noticias</option>
									</select>
								</div>

							</div>


							<div class="col-md-3">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Pastor Pregador</label>
									<input type="text" class="form-control" id="pregador" name="pregador" placeholder="Ex: Pastor Márcio">
								</div>
							</div>

							

						</div>


						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Primeira Descrição <small><small> (Se ouver) </small></small></label>
							<textarea type="text" class="form-control" id="descricao1" ></textarea>
						</div>

<!-- 
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Segunda Descrição <small><small>(Se ouver) </small></small></label>
							<textarea type="text" class="form-control" id="descricao2" name="descricao2"></textarea>
						</div>


						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Terceira Descrição <small><small>(Se ouver) </small></small></label>
							<textarea type="text" class="form-control" id="descricao3" name="descricao3" ></textarea>
						</div> -->

						<div class="row">

							<div class="col-md-4">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Imagem <small>(Quadrada maior que 500x500)</small></label>
									<input type="file" class="form-control-file" id="imagem" name="imagem" onChange="carregarImg();">
								</div>
							</div>
							<div class="col-md-2">
								<div id="divImg" class="mt-4">
									<img src="<?=ROTA_IGREJA?>/img/eventos/sem-foto.jpg"  width="100px" id="target">									
								</div>
							</div>

							
							<div class="col-md-4">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Banner (1000 x 670)</label>
									<input type="file" class="form-control-file" id="banner" name="banner" onChange="carregarImgBanner();">
								</div>
							</div>
							<div class="col-md-2">
								<div id="divImgBanner" class="mt-4">
									<img src="<?=ROTA_IGREJA?>img/eventos/sem-foto.jpg"  width="100px" id="targetBanner">									
								</div>
							</div>

						</div>





						<input type="hidden" id="id" name="id">
						<input type="hidden" id="igreja2" name="igreja" value="<?php echo $id_igreja ?>">

					</div>
					<small><div align="center" id="mensagem"></div></small>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar">Fechar</button>
						<button type="submit" class="btn btn-primary">Salvar</button>
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



	<div class="modal fade" id="modalDados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Título : <span id="titulo-dados"></span></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<small>
					
					<span class=""><b>Subtítulo:</b> <span id="subtitulo-dados"></span></span>
					<hr style="margin:4px">
					
					<div class="row">
						<div class="col-md-4">
							<span class=""><b>Data Cadastro:</b> <span id="cad-dados"></span></span>
							
						</div>

						<div class="col-md-4">

							<span class=""><b>Data Evento:</b> <span id="evento-dados"></span></span>
							
						</div>

						<div class="col-md-4">

							<span class=""><b>Tipo:</b> <span id="tipo-dados"></span></span>
							
						</div>
					</div>
					<hr style="margin:4px">


					<div class="row">
						<div class="col-md-6">
							<span class=""><b>Cadastrado Por:</b> <span id="usu-cad-dados"></span></span>
						</div>

						<div class="col-md-6">

							<span class=""><b>Ativo:</b> <span id="ativo-dados"></span></span>
						</div>
					</div>
					<hr style="margin:4px">


					<span class=""><b>OBS:</b> <span id="obs-dados"></span></span>
					<hr style="margin:4px">
					
					<div class="row mt-4">
						<div class="col-md-6">
							<span class=""><img src="" id="foto-dados" width="100%"></span>	
						</div>

						<div class="col-md-6 mt-2">
							<span>
						
						 <iframe id="video-dados" width="100%" height="250" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</span>
							
						</div>
					</div>
					<hr style="margin:4px">


					

				</small>
				</div>

			</form>
		</div>
	</div>
</div>






<!-- Modal -->
<div class="modal fade" id="modalObs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><span id="tituloModal">Observações - <span id="nome-obs"></span></span></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="form-obs" method="post">
				<div class="modal-body">

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Observações (Máximo 500 Caracteres)</label>
						<textarea class="form-control" id="obs" name="obs" maxlength="500" style="height:200px"></textarea>
					</div>



					<small><div id="mensagem-obs" align="center"></div></small>

					<input type="hidden" class="form-control" name="id-obs"  id="id-obs">


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fechar-obs">Fechar</button>
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>








		<script type="text/javascript">var pag = "Cadastro/<?=$pagina?>";</script>
		<script src="<?=ROTA_JS?>/ajax.js"></script>


		<script type="text/javascript">

			function editar(id){

				$.ajax({
					url:"<?=ROTA_IGREJA?>Home/getEventosID/"+id,
					method:"POST",
					dataType:"json",
					success: function(res){
						console.log(res[0]);
							$('#id').val(id);
							$('#titulo').val(res[0].titulo);
							$('#subtitulo').val(res[0].subtitulo);
							$('#descricao1').val(CKEDITOR.instances.descricao1.setData(res[0].descricao1));
							// $('#descricao2').val(res[0].descricao2);
							// $('#descricao3').val(res[0].descricao3);
							$('#data_evento').val(res[0].data_evento);
							$('#video').val(res[0].video);
							$('#pregador').val(res[0].pregador);

							$('#tipo').val(res[0].tipo).change();

							$('#target').attr('src', '<?=ROTA_IGREJA?>img/eventos/' + res[0].imagem);
							$('#targetBanner').attr('src', '<?=ROTA_IGREJA?>img/eventos/' + res[0].banner);

							$('#tituloModal').text('Editar Registro');
							var myModal = new bootstrap.Modal(document.getElementById('modalForm'), {		});
							myModal.show();
							$('#mensagem').text('');
					}	
				});
				// 
			}



			function dados(id){
				$.ajax({
					url:"<?=ROTA_IGREJA?>Home/getEventosID/"+id,
					method:"POST",
					dataType:"json",
					success: function(res){
						$('#titulo-dados').text(res[0].titulo);
						$('#subtitulo-dados').text(res[0].subtitulo);
						$('#cad-dados').text(res[0].data_cad);
						$('#evento-dados').text(res[0].data_evento);
						$('#usu-cad-dados').text(res[0].usuario);
						$('#ativo-dados').text(res[0].ativo);
						$('#obs-dados').text(res[0].obs);
						$('#tipo-dados').text(res[0].tipo);
						
						$('#foto-dados').attr('src', '<?=ROTA_IGREJA?>/img/eventos/' + res[0].imagem);
						$('#video-dados').attr('src', res[0].video);

						var myModal = new bootstrap.Modal(document.getElementById('modalDados'), {		});
						myModal.show();
						$('#mensagem').text('');
					}
				});
			
				}



			function obs(id, nome, obs){
				console.log(obs)

				for (let letra of obs){  				
					if (letra === '+'){
						obs = obs.replace(' +  + ', '\n')
					}			
				}


				$('#nome-obs').text(nome);
				$('#id-obs').val(id);
				$('#obs').val(obs);



				var myModal = new bootstrap.Modal(document.getElementById('modalObs'), {		});
				myModal.show();
				$('#mensagem-obs').text('');
			}

			function limpar(){
				var data = "<?=$data_atual?>";

				$('#id').val('');
				$('#titulo').val('');	
				$('#subtitulo').val('');		
				$('#descricao1').val('');
				$('#descricao2').val('');
				$('#descricao3').val('');
				$('#video').val('');
				$('#pregador').val('');

				$('#data_evento').val(data);

				
				$('#target').attr('src', '<?=ROTA_IGREJA?>/img/eventos/sem-foto.jpg');
				$('#targetBanner').attr('src', '<?=ROTA_IGREJA?>/img/eventos/sem-foto.jpg');
			}


			
		</script>



		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<script>
			$(document).ready(function() {
				$('.sel2').select2({
			//placeholder: 'Selecione um Cliente',
			dropdownParent: $('#modalTransferir')
		});
			});


		</script>

		<style type="text/css">
			.select2-selection__rendered {
				line-height: 36px !important;
				font-size:16px !important;
				color:#666666 !important;

			}

			.select2-selection {
				height: 36px !important;
				font-size:16px !important;
				color:#666666 !important;

			}
		</style>  


		<script type="text/javascript">
			
function carregarImgBanner() {
    var target = document.getElementById('targetBanner');
    var file = document.querySelector("#banner").files[0];
    var arquivo = file['name'];
    resultado = arquivo.split(".", 2);
      
        var reader = new FileReader();

        reader.onloadend = function () {
            target.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);

        } else {
            target.src = "";
        }
    }

		</script>
 <script>
     CKEDITOR.replace( 'descricao1' );


	 

$("#formEvernto").submit(function () {
	event.preventDefault();
	var formData = new FormData(this);
    formData.append('descricao1', CKEDITOR.instances['descricao1'].getData());

	$.ajax({
		url: pag + "/inserir.php",
		type: 'POST',
		data: formData,

		success: function (mensagem) {
			$('#mensagem').text('');
			$('#mensagem').removeClass()
			if (mensagem.trim() == "Salvo com Sucesso") {
                    //$('#nome').val('');
                    //$('#cpf').val('');
                     $('#btn-fechar').click();
                     mensagemSalvar();
                     
                     setTimeout(function(){
                        // window.location="index.php?pag=" + pag;
                        // window.location.reload();
                    }, 500)
                     
                    
                     
                } else {

                	$('#mensagem').addClass('text-danger')
                	$('#mensagem').text(mensagem)
                }


            },

            cache: false,
            contentType: false,
            processData: false,
            
        });

});

 </script>