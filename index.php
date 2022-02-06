<?php 

header('charset=UTF-8');
require "autoload.php";
define('ROTA_GERAL',"http://$_SERVER[HTTP_HOST]".'/sisIgreja');
define('PATH_GERAL',__DIR__);
define('ROTA_CSS',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/View/estilos/css');
define('ROTA_IMG',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/img');
define('ROTA_JS',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/View/estilos/js');
$rota=new Rota();
?>