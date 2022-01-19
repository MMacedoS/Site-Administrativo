<?php
    require_once "./autoload.php";
class SermaoController extends Controller{

    public function __construct()
    {
        $HomeModel=new HomeModel();
        $this->igrejas=$HomeModel->buscaIgreja();
        //  var_dump($this->igrejas);
        // die;
    }
    public function index()
    {
        $this->mostrarView('sermao');
    }

    public function igrejas()
    {
        $HomeModel=new HomeModel();
        return $HomeModel->buscaAllIgrejas();
    }
    public function alertasAtivo()
    {
        $HomeModel=new HomeModel();
        return $HomeModel->alertaAtivos();
    }
    public function cultos($id){
        $HomeModel=new HomeModel();
        return $HomeModel->culto($id);
    }
}
?>