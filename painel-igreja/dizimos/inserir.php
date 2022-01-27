<?php

@session_start();
$id_usuario = @$_SESSION['id_usuario'];

$pagina = 'dizimos';
$valor = $_POST['valor'];
$membro = $_POST['membro'];
$data = $_POST['data'];
$igreja = $_POST['igreja'];
$id = @$_POST['id'];

$res_con = $this->getMembrosId($membro);
if(count($res_con) > 0){
	$nome_membro = $res_con[0]['nome'];
}else{
	$nome_membro = 'Membro Não Informado';
}


if($id == "" || $id == 0){
	$query=$this->insertDizimos($membro,$valor,$id_usuario,$igreja,$data);
	// $query = $pdo->prepare("INSERT INTO $pagina SET membro = '$membro', valor = :valor, data = '$data', usuario = '$id_usuario', 
	// igreja = '$igreja'");

	// $query->bindValue(":valor", "$valor");
	// $query->execute();
	// $ult_id = $pdo->lastInsertId();

	//INSIRO NAS MOVIMENTACOES
// $pdo->query("INSERT INTO movimentacoes SET tipo = 'Entrada', movimento = 'Dízimo', descricao = '$nome_membro', valor = '$valor', data = '$data', usuario = '$id_usuario', id_mov = '$ult_id', igreja = '$igreja'");

}else{
	// require_once(ROTA."/painel-igreja/View/pages/verificar-tesoureiro.php");
	$query=$this->updateDizimos($membro,$valor,$id_usuario,$igreja,$data,$id);
	/////// $query = $pdo->prepare("UPDATE $pagina SET membro = '$membro', valor = :valor, data = '$data', usuario = '$id_usuario', igreja = '$igreja' where id = '$id'");
}

echo $query;


?>