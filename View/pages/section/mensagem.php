


<section>
    <div id="fh5co-intro">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center">
				<h2>Vivendo na Maravilhosa Graça de Deus!</h2>
						Cultos: 
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

						<span style="margin-right:10px"><i class="bi bi-check text-success mr-1"></i><?= $dia ?> <?= $hora ?> </span>
					<?php } } ?>
				</div>
			</div>
		</div>
		<hr>
    </section>