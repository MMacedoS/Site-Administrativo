<?php
require_once "../bd/Conexao.php";
class LoginModel extends Conexao
{
    public $instancia;
    public function __construct()
    {
        $this->instancia=Conexao::connect();
        
    }

    public function autenticar($usuario,$senha)
    {
        
        $query = $this->instancia->prepare("SELECT * FROM usuarios where (email = :usuario or cpf = :usuario) and senha = :senha");
        $query->bindValue(":usuario",$usuario,PDO::PARAM_STR);
        $query->bindValue(":senha",$senha,PDO::PARAM_STR);
        $query->execute();
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }
}




?>