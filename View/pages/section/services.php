<section>
    <div id="fh5co-services" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Eventos Recentes</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
		<?php 
		$res=$this->eventosHome;
		for($i=0; $i < 3; $i++){
								foreach ($res[$i] as $key => $value){} 
								
								$titulo = $res[$i]['titulo'];
						$subtitulo = $res[$i]['subtitulo'];						
						$data_evento = $res[$i]['data_evento'];
						$id = $res[$i]['id'];
						$imagem = $res[$i]['imagem'];
						$url = $res[$i]['url'];
						$video = $res[$i]['video'];
						$data_eventoF = implode('/', array_reverse(explode('-', $data_evento)));

						if($data_evento >= date('Y-m-d')){
							$classe_data = 'text-primary';
							}else{
								$classe_data = 'text-danger';
							}

								?>
				<div class="col-md-4 animate-box">
					<div class="services">
						<a href="#" class="img-holder"><img class="img-responsive" src="img/eventos/<?=$imagem?>" alt="<?=$titulo?>"></a>
						<div class="desc">
							<h3><a href="#"><?=$titulo?></a></h3>
							<p><?=$subtitulo?></p>

							<span>
							<i class="bi bi-calendar-date <?= $classe_data ?> mr-1" style="margin-right:5px"></i><span>Data Evento: <?= $data_eventoF ?></span>
							</span>
							
							<span style="margin-left:15px">
							<a href="<?=ROTA_GERAL?>/evento/evento/<?php echo $url ?>">Veja Mais<i class="icon-arrow-right3"></i></a>
						</span>
						</div>
					</div>
				</div>
			<?php
		 }
			?>
			
			</div>
		</div>

    </section>