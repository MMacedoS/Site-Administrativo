<?php
define('ROTA_GERAL',"http://$_SERVER[HTTP_HOST]".'/sisIgreja/sistema');



spl_autoload_register(function($new){    
$root=__ROOT__."/";

    if(file_exists("Controller/".$new.".php"))
    {
        require_once "Controller/".$new.".php";

    }elseif(file_exists("Rota/".$new.".php"))
    {
        require_once "Rota/".$new.".php";
        
    }elseif(file_exists("Model/".$new.".php"))
    {
        require_once "Model/".$new.".php";
        
    }elseif(file_exists($root."bd/".$new.".php"))
    {
        require_once $root."bd/".$new.".php";
        
    }
});

@session_start();
if(@$_SESSION['nivel_usuario'] != 'bispo' and @$_SESSION['nivel_usuario'] != 'pastor'  and @$_SESSION['nivel_usuario'] != 'tesoureiro' and @$_SESSION['nivel_usuario'] != 'secretario'){
	echo "<script>window.location='../sistema/index.php'</script>";
}

?>