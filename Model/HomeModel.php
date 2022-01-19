<?php
 require_once "./bd/Conexao.php";
class HomeModel extends Conexao{
    
    public function buscaIgreja()
    { 
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM igrejas where id =3");
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function buscaAllIgrejas()
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM igrejas order by matriz desc, nome asc");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }

    public function alertaAtivos()
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM alertas where ativo = 'Sim' and data >= curDate()");
	    $res = $query->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function culto($id_igreja)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM cultos where igreja = '$id_igreja'");
	   return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function EventosAtivos($id_igreja,$limit,$offset)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM eventos where igreja ='$id_igreja' and ativo = 'Sim' and banner != 'sem-foto.jpg' LIMIT $limit OFFSET $offset");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }
  
    public function evento($titulo)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM eventos where url='$titulo' and ativo = 'Sim' and banner != 'sem-foto.jpg' order by id desc");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }
    public function EventosHome($id_igreja)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM eventos where igreja = '$id_igreja' and ativo = 'Sim' and tipo = 'Evento' order by  data_evento desc, id desc limit 3");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }

    public function membros($id_igreja)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM membros where igreja = '$id_igreja'");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }
    public function celulas($id_igreja)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM celulas where igreja = '$id_igreja'");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }
    public function grupos($id_igreja)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM grupos where igreja = '$id_igreja'");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }

    public function sermoes($id_igreja)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM eventos where igreja = '$id_igreja' and ativo = 'Sim' and tipo = 'Pregação' order by data_evento desc, id desc limit 3");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }


    public function versos($id_igreja)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM versos where igreja = '$id_igreja' and ativo = 'Sim' order by data_mensagem desc, id desc limit 3");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }
    public function noticias($id_igreja)
    {
        $con=Conexao::connect();
        $query = $con->query("SELECT * FROM eventos where igreja = '$id_igreja' and tipo = 'noticias'  and ativo = 'Sim' order by data_evento desc, id desc limit 3");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		return $res;

    }

}
?>