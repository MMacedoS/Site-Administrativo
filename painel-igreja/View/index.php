<?php 
// // @session_destroy();
// require_once("verificar.php");
// require_once("../conexao.php");
require_once "componentes/cabecalho.php";
?>


	<div class="container-fluid mb-4 mx-4">
		<?php 
		require_once("pages/".$pag.'.php');
		?>
	</div>

	<?php 
require_once "componentes/rodape.php";
?>