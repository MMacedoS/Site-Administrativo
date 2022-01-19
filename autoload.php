
<?php

spl_autoload_register(function($instancia){

    if(file_exists("controller/".$instancia.".php")){
        require "controller/".$instancia.".php";
    }
    elseif(file_exists("model/".$instancia.".php")){
        require "model/".$instancia.".php";
    }
    elseif(file_exists("rota/".$instancia.".php")){
        require "rota/".$instancia.".php";
    }
});

?>