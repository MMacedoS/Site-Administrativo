<?php 
// // @session_destroy();
// require_once("verificar.php");
// require_once("../conexao.php");
require_once "componentes/cabecalho.php";
?>


	<div class="container-fluid mb-4 mx-4">
		<?php 
			if(file_exists(IMAGEM."\View\\pages\\".$pag.".php")){
				require_once(IMAGEM."\View\\pages\\".$pag.".php");
			}
		?>
	</div>

	<?php 
require_once "componentes/rodape.php";
?>