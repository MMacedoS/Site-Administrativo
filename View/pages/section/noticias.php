 
<?php

$res = $this->noticias;
				$total_reg = count($res);
						if($total_reg > 0){

							?> 
<section>
<div id="fh5co-events">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Noticias</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<?php foreach ($res as $key => $value) {
					# code...
				?>
				<div class="col-md-4 animate-box">
					<div class="events-entry">
					<a href="#" class="img-holder"><img class="img-responsive" src="img/eventos/<?=$value['imagem']?>" alt="<?=$value['titulo']?>"></a>
						<span class="date"><?php echo implode('/',array_reverse(explode("-",$value['data_evento'])));?></span>
						<h3><a href="#"><?=$value['titulo']?></a></h3>
						<p><?= $value['subtitulo']?></p>
						<a href="#">leia mais <i class="icon-arrow-right3"></i></a>
					</div>
				</div>				
				<?php  }?>
			</div>
		</div>
</section>

<?php  }?>