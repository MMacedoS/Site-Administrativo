<?php
foreach (glob("autoload.php") as $arquivo) {
    require_once $arquivo;
}

class HomeModel extends Conexao
{
    private $igreja;
    public function __construct()
    {
        $this->igreja =Conexao::connect();
    }

    public function getIgrejasAll($id_igreja)
    {
        
        $query = $this->igreja->query("SELECT * FROM igrejas where id = '$id_igreja'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUser($id_usuario)
    {
       
        $query = $this->igreja->query("SELECT * FROM usuarios where id = '$id_usuario'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getConfig()
    {
       
        $query = $this->igreja->query("SELECT * FROM config");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCargos()
    {
       
        $query = $this->igreja->query("SELECT * FROM cargos order by id asc");		
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCargoId($id)
    {
       
        $query = $this->igreja->query("SELECT * FROM cargos where id ='$id' order by id asc");
		return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMembros($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM membros where igreja = '$id_igreja' order by ativo desc");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getPagHoje($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM pagar where igreja = '$id_igreja' and vencimento = curDate() and pago != 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getPagVencidos($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM pagar where igreja = '$id_igreja' and vencimento < curDate() and pago != 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getRecHoje($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM receber where igreja = '$id_igreja' and vencimento = curDate() and pago != 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getGrupos($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM grupos where igreja = '$id_igreja'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getCelulas($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM celulas where igreja = '$id_igreja'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getPatrimonios($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM patrimonios where igreja_cad = '$id_igreja' and ativo = 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getMovimento($id_igreja,$dataInicioMes){
       
        $query = $this->igreja->query("SELECT * FROM movimentacoes where igreja = '$id_igreja' and data >= '$dataInicioMes' and data <= curDate()");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getTarefa($id_igreja)
    {
       
        $query = $this->igreja->query("SELECT * FROM tarefas where status = 'Agendada' and igreja = '$id_igreja' order by status asc, data asc, hora asc");
	    return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }


    
    public function getPastores($dados)
    {
       
        $query = $this->igreja->query("SELECT * FROM pastores where igreja='$dados'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getTesoureiros($dados)
    {
       
        $query = $this->igreja->query("SELECT * FROM tesoureiros where igreja='$dados'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSecretarios($id)
    {
       
        $query = $this->igreja->query("SELECT * FROM secretarios where igreja='$id'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getFornecedores($id)
    {
       
        $query = $this->igreja->query("SELECT * FROM fornecedores where igreja='$id'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
  
    public function getUsuarios($id)
    {
       
        $query = $this->igreja->query("SELECT id,nome,email,nivel,id_pessoa,foto,igreja,cpf FROM usuarios where igreja='$id'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllTarefas($id)
    {       
        $query = $this->igreja->query("SELECT * FROM tarefas where igreja = '$id' order by status asc, data asc, hora asc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPastoresById($dados)
    {    
    $query = $this->igreja->query("SELECT * FROM pastores where cpf = '$dados' or nome='$dados' or id='$dados' limit 1");   
    return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCultos($dados)
    {    
        $query = $this->igreja->query("SELECT * FROM cultos where igreja = '$dados' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAlertas($dados)
    {    
        $query = $this->igreja->query("SELECT * FROM alertas where igreja = '$dados' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getEventos($dados)
    {    
        $query = $this->igreja->query("SELECT * FROM eventos where igreja = '$dados' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>

