<?php
@session_start();
$id_usuario = @$_SESSION['id_usuario'];

$pagina = 'doacoes';

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
	$query=$this->insertDoacoes($membro,$valor,$id_usuario,$igreja,$data);

}else{
	$query=$this->updateDoacoes($membro,$valor,$id_usuario,$igreja,$data,$id);	

}







echo $query;


?>