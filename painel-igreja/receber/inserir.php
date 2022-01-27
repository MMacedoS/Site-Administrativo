<?php

@session_start();
$id_usuario = @$_SESSION['id_usuario'];
$pagina = 'receber';
$descricao = $_POST['descricao'];
$membro = $_POST['membro'];
$valor = $_POST['valor'];
$vencimento = $_POST['vencimento'];
$igreja = $_POST['igreja'];

$valor = str_replace(',', '.', $valor);

$id = @$_POST['id'];


if($id == "" || $id == 0){
	$query = $this->insertReceber($descricao,$membro,$valor,$vencimento,$id_usuario,$pago,$igreja);
	
}else{
	$query = $this->updateReceber($descricao,$membro,$valor,$vencimento,$id_usuario,$igreja,$id);
		

}

echo $query;


?>