
<?php

spl_autoload_register(function($instancia){

    
    if(file_exists("Controller/".$instancia.".php")){
        require "Controller/".$instancia.".php";
    }
    elseif(file_exists("Model/".$instancia.".php")){
        require "Model/".$instancia.".php";
    }
    elseif(file_exists("Rota/".$instancia.".php")){
        require "Rota/".$instancia.".php";
    }
    elseif(file_exists("bd/".$instancia.".php")){
        require "bd/".$instancia.".php";
    }
});

?>