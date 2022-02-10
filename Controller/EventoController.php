<?php
    require_once "./autoload.php";
class EventoController extends Controller{

    public function __construct()
    {
        $HomeModel=new HomeModel();
        $this->igrejas=$HomeModel->buscaIgreja();
        //  var_dump($this->igrejas);
        // die;
    }
    public function index()
    {
        $this->mostrarView('eventos');
    }
    public function igrejas()
    {
        $HomeModel=new HomeModel();
        return $HomeModel->buscaAllIgrejas();
    }

    public function evento($evento)
        {
            $HomeModel=new HomeModel();
            $evento=$HomeModel->evento($evento);
            
            $this->mostrarEvento('evento',$evento);
        }
    public function eventos($limit)
    {
        $limit= explode('h',$limit);
               
        $HomeModel=new HomeModel();
        $this->eventos=$HomeModel->EventosAtivos(3,$limit[0],$limit[1]);
        echo json_encode($this->eventos);
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