<?php

class Rota
{   
    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        $controller="LoginController";
        $metodo="login";
        $parametros=[];
        
        if(isset($_GET['pag']))
        {
            $url= $_GET['pag'];
            
            if(!empty($url))
            {
                $url=explode("/",$url);
                $controller=$url[0]."Controller";
                array_shift($url);

                if(!empty($url) && isset($url[0]))
                {
                    $metodo=$url[0];
                    array_shift($url);

                    if(count($url)>0)
                    {
                        $parametros=$url;
                    }
                }else{
                    $metodo="login";
                    $parametros=[];
                }
            }

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
        $control= new $controller;

        call_user_func_array(array($control,$metodo),$parametros);
    }
}



?>