<?php 
if(count($this->eventosHome)>0) ?>
<section>
    <aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
				<?php foreach ($this->eventosHome as $key => $value) {
					# code...
			?>
			   	<li style="background-image: url(<?=ROTA_GERAL?>/img/eventos/<?=$value['banner']?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center">
				   				<div class="slider-text">
					   				<div class="slider-text-inner">
					   					<h1><?=$value['titulo']?></h1>
											<h2><?=substr($value['subtitulo'],0,100)?></h2>
											<p>
												<!-- <a class="btn btn-primary btn-demo popup-vimeo" href="<=$value['video']?>"> <i class="icon-play4"></i> Assistir Video</a>  -->
												<a href="<?=ROTA_GERAL?>/evento/evento/<?=$value['url']?>" class="btn btn-primary btn-learn">veja mais! <i class="icon-arrow-right3"></i></a></p>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>			
			<?php }?>
			  	</ul>
		  	</div>
		</aside>
    </section>

