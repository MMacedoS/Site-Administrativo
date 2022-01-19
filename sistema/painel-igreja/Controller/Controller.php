<?php
 require_once "./config/autoload.php";


class Controller{

    public $igrejas;
    public $usuario;   

    public function mostrarIndex($index)
    {
        require_once "View/".$index.".php";
    }
}

?>