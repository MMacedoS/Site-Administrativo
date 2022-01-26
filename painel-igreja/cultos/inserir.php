<?php

$pagina = 'cultos';
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$dia = $_POST['dia'];
$hora = $_POST['hora'];
$igreja = $_POST['igreja'];
$id = @$_POST['id'];





if($id == "" || $id == 0){
	
$res = $this->getCultosId($nome,$igreja);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O nome já está Cadastrado!';
	exit();
}
	$query = $this->insertCultos($descricao,$nome,$dia,$hora,$igreja,$id);

}else{
	$query = $this->updateCultos($descricao,$nome,$dia,$hora,$igreja,$id);
}

echo $query;


?>