
<?php
 require_once './View/componentes/topo.php';
?>

<?php if(count($evento)>0)?>
<div class="container-wrap">

        <aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
                <?php 
					
					
                    $titulo = $evento[0]['titulo'];
                    $subtitulo = $evento[0]['subtitulo'];						
                    $data_evento = $evento[0]['data_evento'];
                    $id = $evento[0]['id'];
                    $banner = $evento[0]['banner'];
                    $url = $evento[0]['url'];
                    $video = $evento[0]['video'];
                    $pregador = $evento[0]['pregador'];
                    $descricao1 = $evento[0]['descricao1'];
                    $descricao2 = $evento[0]['descricao2'];
                    $descricao3 = $evento[0]['descricao3'];
                    $imagem = $evento[0]['imagem'];

                    $data_eventoF = implode('/', array_reverse(explode('-', $data_evento)));


                    if($video != ''){
                        $classe_video = '';
                    }else{
                        $classe_video = 'd-none';
                    }

                    ?>

                            <li style="background-image: url(<?=ROTA_GERAL?>/img/eventos/<?php echo $banner ?>);">
						    	<div class="overlay"></div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3 text-center">
                                                <div class="slider-text">
                                                    <div class="slider-text-inner">
                                                        <h1><?php echo $titulo ?> </h1>
                                                        <span style="color:#FFF"><?php echo $subtitulo ?></span>
                                                        <h2 style="margin-top:10px">Dia <?php echo $data_eventoF ?></h2>

                                                        <?php if($pregador != ""){ ?>
                                                        <p style="margin-top:8px; color:#FFF"><u>PREGADOR: <?php echo mb_strtoupper($pregador) ?></u></p>
                                                        <?php } ?>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
								</div>
							</li>
                </ul>
			</div>
		</aside>
        <div class="row" style="padding:20px;">
          
        <?php if($descricao1 != ""){ ?>
				<div class="col-md-6" style="margin-top:25px">
                <h3 style="padding:20px;margin-top:20px"><?=$titulo?></h3>
					<p><?php echo $descricao1 ?></p>
				</div>
				<?php } ?>

                <?php if($video != ""){ ?>
				<div class="col-md-6" style="margin-top:25px">
					<iframe id="video-dados" width="100%" height="300" src="<?php echo $video ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<?php }else{ 
				if($imagem != ""){
					?>
					<div class="col-md-6" style="margin-top:25px">
					<img src="<?=ROTA_GERAL?>/img/eventos/<?php echo $imagem ?>" width="100%">
					</div>
				<?php } } ?>


                <?php if($descricao2 != ""){ ?>
				<div class="col-md-12" style="margin-top:25px">
					<p><?php echo $descricao2 ?></p>
				</div>
				<?php } ?>

				<?php if($descricao3 != ""){ ?>
				<div class="col-md-12" style="margin-top:25px">
					<p><?php echo $descricao3 ?></p>
				</div>
				<?php } ?>
            </div>

</div>
<?php
 require_once './View/componentes/rodape.php';
?>