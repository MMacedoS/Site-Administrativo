<?php
require_once "./config/autoload.php";
class HomeController 
{
    private $homeModel;

    public function __construct()
    {
        $this->homeModel = new HomeModel();
    }
    
    public function index()
    {
        require_once "View/index.php";
    }
    public function getUsuario($id)
    {
        return $this->homeModel->getUser($id);
    }
    public function getConfig()
    {
        return $this->homeModel->getConfig();
    }
   
    public function getIgrejas($id){
        return $this->homeModel->getIgrejas($id);
    }

    public function getPastores(){
        return $this->homeModel->getPastores();
    }
    
    public function getIgrejasAll(){
        return $this->homeModel->getIgrejasAll();
    }

    public function getMembrosAtivos(){
        return $this->homeModel->getMembrosAtivos();
    }

    public function getMembrosIgrejaAtivos($id_ig){
        return $this->homeModel->getMembrosIgrejaAtivos($id_ig);
    }

    public function getPastoresId($pastor){
        return $this->homeModel->getPastoresId($pastor);
    }
  
    public function getMembrosIdIgreja($id){
        return $this->homeModel->getMembrosIdIgreja($id);
    }



}