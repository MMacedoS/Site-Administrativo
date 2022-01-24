<?php
    require_once "./autoload.php";
class HomeController extends Controller{

    public function __construct()
    {
        $HomeModel=new HomeModel();
        $this->igrejas=$HomeModel->buscaIgreja();
        $this->eventosHome=$HomeModel->EventosHome(3);
        $this->membros=$HomeModel->membros(3);
        $this->celulas=$HomeModel->celulas(3);
        $this->grupos=$HomeModel->grupos(3);
        $this->sermoes=$HomeModel->sermoes(3);
        $this->versos=$HomeModel->versos(3);
        $this->noticias=$HomeModel->noticias(3);
        //  var_dump($this->igrejas);
        // die;
    }
    public function index()
    {
        $this->mostrarView('index');
    }
    public function verifica($id)
    {
        $this->mostrarView('verificaMembro');
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

    public function paginas($home){
        $this->mostrarView($home);
    }
    
}
?>