<?php
 require_once "./autoload.php";
class Controller{
    
    public function mostrarIndex($view)
    {
        require_once "View/".$view.".php";
    }
}
?>