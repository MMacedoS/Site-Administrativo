<?php
const DIR=__DIR__."/";
define('ROTA_CSS',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/sistema/css');
define('ROTA_JS',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/sistema/js');
define('ROTA',"http://$_SERVER[HTTP_HOST]".'/sisIgreja');
require_once "config/autoload.php";
$rota=new Rota();

?>