<?php

require_once '../Model/RelatorioModel.php';
class RelatorioController {
    
   
    public $conRelatorio;

    public function __construct()
    {
       $this->conRelatorio = new RelatorioModel();
       return $this->conCadastro->getMembros($dado);
    }
    public function carterinha(){
       return $res=$this->conRelatorio->config();
        
    }

    public function getMembros($dado)
    {

    }
}



?>