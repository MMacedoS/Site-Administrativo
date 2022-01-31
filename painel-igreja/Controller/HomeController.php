<?php
class HomeController extends Controller{
    public $conHome;
    public function __construct()
    {
       $this->conHome = new HomeModel();
       
    }
    public function index($igreja)
    {
        
        $this->igrejas=$this->conHome->getIgrejasAll(3);       
        $this->mostrarIndex('index');
    }

    public function celulas($igreja)
    {
        $this->mostrarCelulas($igreja);
    }
    
    public function grupos($igreja)
    {
        $this->mostrargrupos($igreja);
    }



    public function getIgrejaId($id){
        return $this->conHome->getIgrejasAll($id);
    }
    
    public function getIgrejas(){
        return $this->conHome->getIgrejas();
    }
    public function getUsuario($id)
    {
        return $this->conHome->getUser($id);
    }

    public function getConfig()
    {
        return $this->conHome->getConfig();
    }
    public function getCargos()
    {
        return $this->conHome->getCargos();
    }
    public function getCargoId($id)
    {
        return $this->conHome->getCargoId($id);
    }
    public function getMembros($id)
    {
        return $this->conHome->getMembros($id);
    }

    public function getPagHoje($id)
    {
        return $this->conHome->getPagHoje($id);
    }

    public function getReceber($id)
    {
        return $this->conHome->getRecHoje($id);
    }
    public function getPagVencida($id)
    {
        return $this->conHome->getPagVencidos($id);
    }

    public function getCelulas($id)
    {
        return $this->conHome->getCelulas($id);
    }
     public function getCelulasMembros($id_igreja,$id)
    {
        return $this->conHome->getCelulasMembros($id_igreja,$id);
    }
    public function getMembrosAtivos($id_igreja)
    {
        return $this->conHome->getMembrosAtivos($id_igreja);
    }    
    public function getPatrimonios($id)
    {
        return $this->conHome->getPatrimonios($id);
    }

    public function  getMovimento($id_igreja,$dataInicioMes)
    {
        return $this->conHome->getMovimento($id_igreja,$dataInicioMes);
    }
    public function getTarefa($id)
    {
        return $this->conHome->getTarefa($id);
    }
    public function getPastores($id)
    {
        return $this->conHome->getPastores($id);
    }
    public function getTesoureiros($id)
    {
        return $this->conHome->getTesoureiros($id);
    }
    public function getSecretarios($id)
    {
        return $this->conHome->getSecretarios($id);
    }
    public function getSecretariosId($id)
    {
        return $this->conHome->getSecretariosId($id);
    }
    public function getFornecedores($id)
    {
        return $this->conHome->getFornecedores($id);
    }

    public function getUsuarios($id)
    {
        return $this->conHome->getUsuarios($id);
    }
    public function getAllTarefas($id)
    {
        return $this->conHome->getAllTarefas($id);
    }
    public function getPastoresById($id)
    {
        return $this->conHome->getPastoresById($id);
    }
    public function getCultos($id)
    {
        return $this->conHome->getCultos($id);
    }

    public function getAlertas($id)
    {
        return $this->conHome->getAlertas($id);
    }
    public function getEventos($id)
    {
        return $this->conHome->getEventos($id);
    }
    public function getFornecedoresId($id)
    {
        return $this->conHome->getFornecedoresId($id);
    }
    public function getFrequencia($dados)
    {
        return $this->conHome->getFrequencia($dados);
    }
    public function getFrequenciaAll()
    {
        return $this->conHome->getFrequenciaAll();
    }
    public function getContasApagar($id)
    {
        return $this->conHome->getContasApagar($id);
    }
    public function getReceberVencida($id_igreja)
    {
        return $this->conHome->getReceberVencida($id_igreja);
    }
    public function getReceberAll($id_igreja)
    {
        return $this->conHome->getReceberAll($id_igreja);
    }
    public function getMembrosId($membros)
    {
        return $this->conHome->getMembrosId($membros);
    }
    public function getDizimos($id)
    {
        return $this->conHome->getDizimos($id);
    }
    public function getOfertas($id_igreja)
    {
        return $this->conHome->getOfertas($id_igreja);
    }
    public function getDoacoes($id_igreja)
    {
        return $this->conHome->getDoacoes($id_igreja);
    }
    public function getVendas($id_igreja)
    {
        return $this->conHome->getVendas($id_igreja);
    }
    public function getMovEntradas($id_igreja)
    {
        return $this->conHome->getMovEntradas($id_igreja);
    }
    public function getMovSaidas($id_igreja)
    {
        return $this->conHome->getMovSaidas($id_igreja);
    }
    public function getMovimentacaoes($id_igreja)
    {
        return $this->conHome->getMovimentacaoes($id_igreja);
    }
    public function getDocumentos($id_igreja)
    {
        return $this->conHome->getDocumentos($id_igreja);
    }
    public function getPatrimoniosItens($id_igreja)
    {
        return $this->conHome->getPatrimoniosItens($id_igreja);
    }
    public function getCelulasMembrosId($igreja,$id_reg,$celula)
    {
        return $this->conHome->getCelulasMembrosId($igreja,$id_reg,$celula);
    }
    public function getGrupos($id_igreja)
    {
        return $this->conHome->getGrupos($id_igreja);
    }
    public function gruposMembros($id_igreja,$id)
    {
        return $this->conHome->gruposMembros($id_igreja,$id);
    }

    public function getTesoureirosId($id)
    {
        return $this->conHome->getTesoureirosId($id);
    }
    public function getGruposMembrosId($igreja,$id_reg,$celula)
    {
        return $this->conHome->getGruposMembrosId($igreja,$id_reg,$celula);
    }
}
?>