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
    public function getIgrejas()
    {
        
        $query = $this->igreja->query("SELECT * FROM igrejas order by matriz desc, nome");
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
    public function getMembrosAtivos($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM membros where igreja = '$id_igreja' and ativo = 'Sim' order by  nome asc");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getPagHoje($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM pagar where igreja = '$id_igreja' and vencimento = curDate() and pago != 'Sim'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getContasApagar($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM pagar where igreja = '$id_igreja' order by pago asc, vencimento asc, id asc");
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
    public function gruposMembros($id_igreja,$id){
        
        $query = $this->igreja->query("SELECT * FROM grupos_membros where igreja = '$id_igreja' and grupo = '$id'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCelulas($id_igreja){
       
        $query = $this->igreja->query("SELECT * FROM celulas where igreja = '$id_igreja'");
        return $res = $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getCelulasMembros($id_igreja,$id){
       
        $query = $this->igreja->query("SELECT * FROM celulas_membros where igreja = '$id_igreja' and celula = '$id'");
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
    public function getTesoureirosId($id)
    {       
        $query = $this->igreja->query("SELECT * FROM tesoureiros where id='$id'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getSecretariosId($id)
    {       
        $query = $this->igreja->query("SELECT * FROM secretarios where id='$id'");
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

    public function getFornecedoresId($dados)
    {    
        $query = $this->igreja->query("SELECT * FROM fornecedores where id = '$dados'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getMembrosId($dados)
    {    
        $query = $this->igreja->query("SELECT * FROM membros where id = '$dados'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getFrequencia($dados)
    {    
        $query = $this->igreja->query("SELECT * FROM frequencias where dias = '$dados'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFrequenciaAll()
    {    
        $query = $this->igreja->query("SELECT * FROM frequencias order by id asc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getReceberVencida($id_igreja)
    {    
        $query = $this->igreja->query("SELECT * FROM receber where igreja = '$id_igreja' and vencimento < curDate() and pago != 'Sim' order by vencimento asc, id asc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getReceberAll($id_igreja)
    {    
        $query = $this->igreja->query("SELECT * FROM receber where igreja = '$id_igreja' order by pago asc, vencimento asc, id asc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getDizimos($id_igreja)
    {    
        $query = $this->igreja->query("SELECT * FROM dizimos where igreja = '$id_igreja' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getOfertas($id_igreja)
    {    
        $query = $this->igreja->query("SELECT * FROM ofertas where igreja = '$id_igreja' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getDoacoes($id_igreja)
    {    
        $query = $this->igreja->query("SELECT * FROM doacoes where igreja = '$id_igreja' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getVendas($id_igreja)
    {    
        $query = $this->igreja->query("SELECT * FROM vendas where igreja = '$id_igreja' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getMovEntradas($id_igreja)
    {    
        $query = $this->igreja->query("SELECT * FROM movimentacoes where igreja = '$id_igreja' and tipo = 'Entrada' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getMovSaidas($id_igreja)
    {    
        $query = $this->igreja->query("SELECT * FROM movimentacoes where igreja = '$id_igreja' and tipo = 'Saída' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getMovimentacaoes($id_igreja)
    {    
        $query = $this->igreja->query("SELECT * FROM movimentacoes where igreja = '$id_igreja' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDocumentos($id_igreja)
    {
        $query = $this->igreja->query("SELECT * FROM documentos where igreja = '$id_igreja' order by id desc");	
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getPatrimoniosItens($id_igreja)
    {
        $query=$this->igreja->query("SELECT * FROM patrimonios where igreja_cad = '$id_igreja' or igreja_item = '$id_igreja' order by id desc");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
   
    public function getCelulasMembrosId($igreja,$id_reg,$celula)
    {
        $query=$this->igreja->query("SELECT * FROM celulas_membros where igreja = '$igreja' and membro = '$id_reg' and celula = '$celula'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getGruposMembrosId($igreja,$id_reg,$celula)
    {
        $query=$this->igreja->query("SELECT * FROM grupos_membros where igreja = '$igreja' and membro = '$id_reg' and grupo = '$celula'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }



}
?>

