<?php
 require_once './View/componentes/topo.php';
?>
<div id="page">

    <div class="container-wrap">
<?php 
require_once "section/slide.php";
require_once "section/mensagem.php";
    
//  require_once "section/membros.php";
 require_once "section/services.php";
 require_once "section/sermoes.php";
 require_once "section/versos.php";     
 require_once "section/noticias.php";
//  require_once "section/novidades.php";

?>

    </div>
</div>
<?php
 require_once './View/componentes/rodape.php';
?>