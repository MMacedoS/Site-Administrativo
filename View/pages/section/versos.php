
<?php

$res = $this->versos;
				$total_reg = count($res);
						if($total_reg > 0){

							?>
    <section>
    <div id="fh5co-bible-verse">
			<div class="overlay"></div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<?php foreach ($res as $key => $value) {
								# code...
							 ?>
							<div class="item">
								<div class="bible-verse-slide active text-center">
									<blockquote>
										<p>&ldquo;<?=$value['mensagem']?>&rdquo;</p>
										<span><?=$value['livro']?></span>
									</blockquote>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<?php  }?>