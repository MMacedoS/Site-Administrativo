<?php

class Rota{
    private $controller;
    private $metodo;
    private $params;

    public function __construct()
    {
        $this->controller = "HomeController";       
        $this->params  = array();
        $this->metodo  = "index";
        $this->run();
    }

    public function run()
    {
        if (isset($_GET['admin']))
        {
            $url = explode('/', $_GET['admin']);

            if (!empty($url[0]))
            {
                $this->controller = ucfirst($url[0]."Controller");
                array_shift($url);

                if (isset($url[0]) && !empty($url[0]))
                {
                    $this->metodo = $url[0];
                    array_shift($url);
                    
                    if(@count($url)>0)
                    {
                        $this->params = $url;
                    }
                }
            }

        }
       $caminho = DIR."Controller/".$this->controller.".php";

       if (!file_exists($caminho) && !method_exists($this->controller,$this->metodo))
       {
            $this->controller = "ErrorController";
            $this->metodo = "index";
       }

       $control = new $this->controller;

       call_user_func_array(array($control,$this->metodo),$this->params);
        
    }
}


?>