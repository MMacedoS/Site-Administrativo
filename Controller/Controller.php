<?php

class Controller {

    public $igrejas;
    public $eventos;
    public $membros;
    public $celulas;
    public $grupos;
    public $eventosHome;
    public $sermoes;
    public $versos;
    public $noticias;
    public function mostrarView($view){


        require_once "View/pages/".$view.".php";
    }
    public function mostrarEvento($page,$evento)
    {

        require_once "View/pages/pageOff/".$page.'.php';
    }
}


?>