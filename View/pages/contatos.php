<?php
 require_once './View/componentes/topo.php';
?>
<div id="page">

    <div class="container-wrap">

    <aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h1>Nosso Contato</h1>
										
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-contact">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					
					<p>Entre em contato pelo nosso correio eletronico ou telefone.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-8 animate-box">
					<h3>Nosso Endereço</h3>
					<ul class="contact-info">
						<li><i class="icon-location4"></i><?=@$this->igrejas[0]['endereco']?></li>
						<li><i class="icon-phone3"></i><?=@$this->igrejas[0]['telefone']?></li>
						<li><i class="icon-location3"></i><a href="#"><?=@$this->igrejas[0]['email']?></a></li>
						<li><i class="icon-globe2"></i><a href="#"><?="http://$_SERVER[HTTP_HOST]"?></a></li>
					</ul>
				</div>
				<div class="col-md-7 col-md-pull-2 animate-box">
					<form action="" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nome" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Mensagem" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Enviar Mensagem" class="btn btn-primary btn-modify">
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		
    

    </div>
</div>
<?php
 require_once './View/componentes/rodape.php';
?>