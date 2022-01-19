<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="col-md-4 text-center">
				<h3><?= $this->igrejas[0]['endereco'] ?></h3>
				<h3><?= $this->igrejas[0]['telefone'] ?></h3>
			</div>
			<div class="col-md-4 text-center">
				<h2><a href="#">Cultos</a></h2>
				<?php 
						$res=$this->cultos($this->igrejas[0]['id']);
						$total_reg = count($res);
						if($total_reg > 0){
							for($i=0; $i < $total_reg; $i++){
								foreach ($res[$i] as $key => $value){} 

									$dia = $res[$i]['dia'];
									$hora = $res[$i]['hora'];
									$hora = (new DateTime($hora))->format('H:i');
							?>

							<span style="margin-right:10px"><i class="bi bi-check text-light mr-1"></i><?php echo $dia ?> <?php echo $hora ?> </span><br>

						<?php } } ?>
			</div>
			<div class="col-md-4 text-center">
				<p>
					<ul class="fh5co-social-icons">
					
						<li><a href="<?php echo @$youtube ?>" target="_blank"><i class="icon-youtube2"></i></a></li>
					
						
						<li><a href="<?php echo @$facebook ?>" target="_blank"><i class="icon-facebook2"></i></a></li>
						
						
						<li><a href="<?php echo @$instagram ?>" target="_blank"><i class="icon-instagram"></i></a></li>
						
					</ul>
				</p>
			</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="<?=ROTA_JS?>/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?=ROTA_JS?>/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?=ROTA_JS?>/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?=ROTA_JS?>/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="<?=ROTA_JS?>/jquery.flexslider-min.js"></script>
<!-- Carousel -->
<script src="<?=ROTA_JS?>/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="<?=ROTA_JS?>/jquery.magnific-popup.min.js"></script>
<script src="<?=ROTA_JS?>/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="<?=ROTA_JS?>/jquery.countTo.js"></script>
<!-- Main -->
<script src="<?=ROTA_JS?>/main.js"></script>

</body>
</html>


