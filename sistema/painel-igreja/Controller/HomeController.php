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
    public function getIgrejaId($id){
        return $this->conHome->getIgrejasAll($id);
    }
    public function getUsuario($id){
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
}
?>