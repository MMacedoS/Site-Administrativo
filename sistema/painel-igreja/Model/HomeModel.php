<?php
 require_once "./config/autoload.php";

class HomeModel extends conexao
{

    public function getIgrejasAll($id_igreja)
    {
        $igreja =Conexao::connect();
        $query = $igreja->query("SELECT * FROM igrejas where id = '$id_igreja'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUser($id_usuario)
    {
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM usuarios where id = '$id_usuario'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getConfig()
    {
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM config");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCargos()
    {
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM cargos order by id asc");		
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCargoId($id)
    {
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM cargos where id ='$id' order by id asc");
		return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMembros($id_igreja){
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM membros where igreja = '$id_igreja' and ativo = 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getPagHoje($id_igreja){
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM pagar where igreja = '$id_igreja' and vencimento = curDate() and pago != 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getPagVencidos($id_igreja){
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM pagar where igreja = '$id_igreja' and vencimento < curDate() and pago != 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getRecHoje($id_igreja){
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM receber where igreja = '$id_igreja' and vencimento = curDate() and pago != 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getGrupos($id_igreja){
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM grupos where igreja = '$id_igreja'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getCelulas($id_igreja){
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM celulas where igreja = '$id_igreja'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getPatrimonios($id_igreja){
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM patrimonios where igreja_cad = '$id_igreja' and ativo = 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getMovimento($id_igreja,$dataInicioMes){
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM movimentacoes where igreja = '$id_igreja' and data >= '$dataInicioMes' and data <= curDate()");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getTarefa($id_igreja)
    {
        $pdo =Conexao::connect();
        $query = $pdo->query("SELECT * FROM tarefas where status = 'Agendada' and igreja = '$id_igreja' order by status asc, data asc, hora asc");
	    return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }


  


}
?>

