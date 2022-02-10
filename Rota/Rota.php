<?php

class Rota{

    public function __construct(){
        $this->run();
    }

    public function run(){
        $parametros=[];
        if(isset($_GET['pag']))
        {
            $url=$_GET['pag'];
        }elseif (isset($_POST['cadastro'])) {
            $url=$_POST['cadastro'];
        }
        
        if(!empty($url))
        {
           
            $url=explode('/',$url);
            $controller=ucfirst($url[0].'Controller');
            array_shift($url);
           
           
            if(!empty($url) && isset($url[0]))
            {
               
                $metodo=$url[0];
                array_shift($url);
            }else
            {
                $metodo='index';
            }
            if(@$url[0]>0)
            {
                $parametros=$url;
            }

        }else
        {
            $controller='HomeController';
            $metodo='index';
        }
        $caminho=ROTA_GERAL.'\Controller/'.$controller.'.php';

        if(!file_exists($caminho) && !method_exists($controller,$metodo))
        {
            $controller='HomeController';
            $metodo='index';
        }
        $control=new $controller;

        call_user_func_array(array($control,$metodo),$parametros);
    }
}

?>