<?php

class Rota
{   
    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        if(isset($_GET['pag']))
        {

        }else
        {
            $controller="LoginController";
            $metodo="Login";
            $parametros=[];
        }

            $caminho="sistema/Controller/".$controller.".php";
            if(!file_exists($caminho) && !method_exists($controller,$metodo))
            {
                $controller="LoginController";
                $metodo="Login";
                $parametros=[];
            }
        $control= new $control;
    }
}



?>