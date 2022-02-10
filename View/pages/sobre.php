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
                                        <h1>Sobre nós</h1>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
            </aside>
		<div id="fh5co-about">
			<div class="row">
				<div class="col-md-4">
					<h3>Versículo Diário</h3>
					<blockquote class="dailyVerse">
						<div id="dailyVersesWrapper"></div>
						<script async defer src="https://dailyverses.net/get/verse.js?language=arc"></script>
					</blockquote>
				</div>
				<div class="col-md-4">
					<h3>Nossa Missão</h3>
					 <?=@$this->igrejas[0]['descricao']?>
				</div>
				<div class="col-md-4">
					<h3>Nossos Ministérios</h3>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<ul class="ministries-list">
						<li><i class="icon-check"></i>Dignissimos asperiores vitae velit</li>
						<li><i class="icon-check"></i>Odit ab aliquam dolor eius.</li>
						<li><i class="icon-check"></i>Asperiores vitae velit veniam totam</li>
						<li><i class="icon-check"></i>Asccusamus alias autem provident</li>
					</ul>
				</div>
			</div>
		</div>
        <?php require_once "section/versos.php";?>
    </div>
</div>
<?php
 require_once './View/componentes/rodape.php';
?>
