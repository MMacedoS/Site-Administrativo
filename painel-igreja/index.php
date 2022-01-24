<?php

// echo $_GET['pag'];
define('__ROOT__', dirname(dirname(__FILE__)));
require_once "config/autoload.php";
define('ROTA_CSS',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/sistema/css');
define('ROTA_JS',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/sistema/js');
define('ROTA_IGREJA',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/painel-igreja/');
define('ROTA',"http://$_SERVER[HTTP_HOST]".'/sisIgreja');
define("IMAGEM",__DIR__);


$rota= new Rota();

?>