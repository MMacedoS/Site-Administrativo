<?php
spl_autoload_register(function($instancia){
    if(file_exists("Controller/".$instancia.".php")){
        require_once "Controller/".$instancia.".php";
    }elseif(file_exists("Model/".$instancia.".php")){
        require_once "Model/".$instancia.".php";
    }elseif(file_exists("Rota/".$instancia.".php")){
        require_once "Rota/".$instancia.".php";
    }
});

?>