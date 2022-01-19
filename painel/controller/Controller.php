<?php
require_once "loginController.php";
@session_start();
class Controller{
    public $pastores;
             
    public function autenticado()
        {           
           if(!isset($_SESSION['logado'])){
             $logar=new LoginController();
             $logar->login();
            
           }
           else{
               return true;
           }
           
        }
    public function Mostrar_index($view){
               
      
        require_once "view/templates/".$view.".php";
      
    }
    public function mostrar_view($view)
    {                
        require_once "view/templates/pages/".$view.".php";
    }
}

?>
