<?php
foreach (glob("autoload.php") as $arquivo) {
    require_once $arquivo;
}
//  require_once "./config/autoload.php";

class Controller{

    public $igrejas;
    public $usuario;   

    public function mostrarIndex($index)
    {
        require_once "View/".$index.".php";
    }
    public function mostrarCelulas($view)
    {
        if(file_exists(IMAGEM."\celulas\\".$view)){
            require_once(IMAGEM."\celulas\\".$view);
            
        }
    }
    public function mostrargrupos($view)
    {
        if(file_exists(IMAGEM."\grupos\\".$view)){
            require_once(IMAGEM."\grupos\\".$view);
            
        }
    }
}

?>