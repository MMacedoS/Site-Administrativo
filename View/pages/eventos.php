<?php
 require_once './View/componentes/topo.php';
$pag = 0;
$limite = $pag * @$itens_por_pagina;
$pagina = $pag;
?>
<!-- <div class="fh5co-loader"></div> -->
<div id="page">

    <div class="container-wrap">

    <!-- <aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(<=ROTA_GERAL?>/img/eventos/14-07-2021-11-39-16-03.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h1>Eventos</h1>
										 <h2><a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> 
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside> -->
		<div id="fh5co-events">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Eventos</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row" id="lista">
				
			</div>
		</div>
	
		<!-- <php require_once "section/membros.php";?> -->

		<small>
			 <div style="margin:10px">
                <button class="btn btn-primary" id="previos"><i class="bi bi-skip-backward-fill"></i></button>

                <?php 
				$total_cont=6;
				$num_paginas = ceil($total_cont/10);
                    for($i = 0; $i < @$num_paginas; $i++){
                        
                        if($pagina == $i){
                            $estilo = 'btn-danger';
                        }else{
                        	$estilo = 'btn-primary';
                        }

                        if($pagina >= ($i - 2) && $pagina <= ($i + 2)){ ?>
                         <button class="btn <?php echo $estilo ?>"id="btntext"  ></button>

                       <?php } 

                    }
                 ?>
                
                
                <button class="btn btn-primary" id="next"><i class="bi bi-skip-forward-fill"></i></button>
            </div>
        </small>
    </div>
</div>


<?php
 require_once './View/componentes/rodape.php';
?>

<script>
	let limite=6;
	let offset=0;
	let pagina=1;
	$(document).ready(function(){
		$.ajax({
			url:'<?=ROTA_GERAL?>/evento/eventos/'+limite+'h'+offset,
			method:'POST',
			dataType:'JSON',
			success:function(resposta){
				lista(resposta);
			}
		});
	});
	function lista(array)
	{
		let html='';
		array.forEach(element => {
			
		
		html+='<div class="col-md-4 ">';
		html+='<div class="events-entry">';
		html+='<a href="#" class="img-holder"><img class="img-responsive" src="img/eventos/'+element['imagem']+'" alt="'+element['titulo']+'"></a>'
		html+='<span class="date">'+element['data_evento']+'</span>';
		html+='<h3><a href="#">'+ element['titulo']+'</a></h3>';
		html+='<p>'+element['subtitulo']+'.</p>';
		html+='<a href="#">leia mais<i class="icon-arrow-right3"></i></a>';
		html+='</div></div>';
		offset=parseInt(element['id']);
		});
		$('#lista').html(html);
		$("#btntext").text(pagina);
	}

	$("#previos").click(function(){
		
		offset>=limite?offset=(offset-6)-1:offset=0;	
		
		$.ajax({
			url:'<?=ROTA_GERAL?>/evento/eventos/'+limite+'h'+offset,
			method:'POST',
			dataType:'JSON',
			success:function(resposta){
				pagina==1?pagina=1:pagina=pagina-1;
				lista(resposta);
				
			}
		});
	});
	$("#next").click(function(){
		offset<=limite?offset=0:offset=offset;	
	
		$.ajax({
			url:'<?=ROTA_GERAL?>/evento/eventos/'+limite+'h'+offset,
			method:'POST',
			dataType:'JSON',
			success:function(resposta){
				pagina==1?pagina+=1:offset=0;
				lista(resposta);
				
			}
		});
	});
	
</script>