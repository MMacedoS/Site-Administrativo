<?php

$pagina = 'receber';
$id = @$_POST['id'];

@session_start();
$id_usuario = @$_SESSION['id_usuario'];

$query =$this->mudaStatusReceber($id_usuario,$id);



//RECUPERAR INFORMAÇÕES DA CONTA

$res = $this->getReceber($id);
$valor = $res[0]['valor'];
$descricao = $res[0]['descricao'];
$vencimento = $res[0]['vencimento'];
$membro = $res[0]['membro'];
$igreja = $res[0]['igreja'];

//INSIRO NAS MOVIMENTACOES
// /////$pdo->query("INSERT INTO movimentacoes SET tipo = 'Entrada', movimento = 'Venda', descricao = '$descricao', valor = '$valor', data = curDate(), usuario = '$id_usuario', id_mov = '0', igreja = '$igreja'");
if($query=="Alterado com Sucesso"){
$query= $this->insertMovimento('Entrada',"Venda",$descricao,$valor,$id_usuario,0,$igreja);
}
echo $query;
?>