<?php

$res = $this->sermoes;
				$total_reg = count($res);
						if($total_reg > 0){

							?>

<section>
    <div id="fh5co-sermon">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Pregações</h2>
					<p>Ultimas pregações.</p>
				</div>
			</div>
			<div class="row">
				
				<?php 
				
							for($i=0; $i < $total_reg; $i++){
								foreach ($res[$i] as $key => $value){} 

									$titulo = $res[$i]['titulo'];
						$subtitulo = $res[$i]['subtitulo'];						
						$data_evento = $res[$i]['data_evento'];
						$id = $res[$i]['id'];
						$imagem = $res[$i]['imagem'];
						$url = $res[$i]['url'];
						$video = $res[$i]['video'];
						$pregador = $res[$i]['pregador'];
						$data_evento = $res[$i]['data_evento'];

						$data_eventoF = implode('/', array_reverse(explode('-', $data_evento)));

						if($data_evento >= date('Y-m-d')){
							$classe_data = 'text-primary';
							}else{
								$classe_data = 'text-danger';
							}

							?>
				<div class="col-md-4 text-center animate-box">
					<div class="sermon-entry">
						<div class="sermon" style="background-image: url(img/eventos/<?=$imagem?>);">
							<div class="play">
								<a class="popup-vimeo" href="<?=$video?>"><i class="icon-play3"></i></a>
							</div>
						</div>
						<h3><?=$titulo?></h3>
						<span><?=$pregador?></span>
					</div>
				</div>
				<?php  } ?>
			</div>
		</div>
    </section>
	<?php  } ?>