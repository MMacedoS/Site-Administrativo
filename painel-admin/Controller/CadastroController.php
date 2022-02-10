<?php
require_once "./config/autoload.php";

class CadastroController
{
    private $cadastroModel;

    public function __construct()
    {
        $this->cadastroModel = new CadastroModel();
    }

    public function getIgrejas()
    {
        
    }

}


?>