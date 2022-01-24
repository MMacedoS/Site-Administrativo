<?php 
define('ROTA_GERAL',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/sistema');
define('ROTA_PAINEL',"http://$_SERVER[HTTP_HOST]".'/sisIgreja');
require_once "autoload.php";
// echo $_GET['pag'];
$rota=new Rota();
 ?>
