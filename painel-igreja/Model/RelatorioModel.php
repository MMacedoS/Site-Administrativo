<?php
 require_once "../config/autoload.php";

class RelatorioModel extends Conexao
{
    public $instancia;
    public function __construct()
    {
        $this->instancia =Conexao::connect();
    }
  

    public function config()
    {
       
        $query = $this->instancia->query("SELECT * FROM config");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
?>

