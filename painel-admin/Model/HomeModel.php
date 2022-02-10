<?php
foreach (glob("autoload.php") as $arquivo) {
    require_once $arquivo;
}

class HomeModel extends Conexao
{
    private $instancia;

    public function __construct()
    {
      
        $this->instancia = Conexao::connect();    
    }

    public function getUser($id_usuario)
    {
        $query = $this->instancia->query("SELECT * FROM usuarios where id = '$id_usuario'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getConfig()
    {       
        $query = $this->instancia->query("SELECT * FROM config");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getIgrejasAll()
    {       
        $query = $this->instancia->query("SELECT * FROM igrejas order by matriz desc, nome asc");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getIgrejas($id)
    {       
        $query = $this->instancia->query("SELECT * FROM igrejas WHERE id='$id' order by matriz desc, nome asc");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPastores()
    {       
        $query = $this->instancia->query("SELECT * FROM pastores order by nome asc");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMembrosAtivos()
    {       
        $query = $this->instancia->query("SELECT * FROM pastores order by nome asc");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMembrosIgrejaAtivos($id_ig)
    {       
        $query = $this->instancia->query("SELECT * FROM membros where igreja = '$id_ig' and ativo = 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPastoresId($pastor)
    {       
        $query = $this->instancia->query("SELECT * FROM pastores where id = '$pastor'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMembrosIdIgreja($id)
    {       
        $query = $this->instancia->query("SELECT * FROM membros where igreja = '$id'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>