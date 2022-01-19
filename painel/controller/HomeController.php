<?php
@session_start();

require_once "./model/PastorModel.php";

class HomeController extends Controller{


    public function index(){
        if($this->autenticado())
        {
        // unset($_SESSION['logado']);
        $this->mostrar_index("Home");         
        }
          
    }
    public function View($param)
    {
        if($this->autenticado())
        {
            $pastorModel=new PastorModel();
            $this->pastores=$pastorModel->getAll();
        // unset($_SESSION['logado']);
        $this->mostrar_view($param);         
        }
    }
}

?>
