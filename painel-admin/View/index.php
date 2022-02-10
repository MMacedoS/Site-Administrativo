<?php 
	require_once "componentes/cabecalho.php";
		if(file_exists(DIR."/View/pages/".$pag.".php")){
			require_once(DIR."/View/pages/".$pag.".php");
		}
		require_once "componentes/rodape.php";
?>
	