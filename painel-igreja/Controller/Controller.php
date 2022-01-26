<?php
foreach (glob("autoload.php") as $arquivo) {
    require_once $arquivo;
}
//  require_once "./config/autoload.php";

class Controller{

    public $igrejas;
    public $usuario;   

    public function mostrarIndex($index)
    {
        require_once "View/".$index.".php";
    }
}

?>