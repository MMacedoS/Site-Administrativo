<?php

$pagina = 'celulas';
$nome = $_POST['nome'];
$dias = $_POST['dias'];
$local = $_POST['local'];
$hora = $_POST['hora'];
$pastor = $_POST['pastor'];
$coordenador = $_POST['coordenador'];
$lider1 = $_POST['lider1'];
$lider2 = $_POST['lider2'];
$igreja = $_POST['igreja'];
$id = @$_POST['id'];



$res = $this->getCelulas($nome,$igreja);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O nome está indisponível!';
	exit();
}


if($id == "" || $id == 0){
	$query = $this->insertCelulas($nome,$dias,$hora,$local,$igreja,$pastor,$coordenador,$lider1,$lider2);

}else{
	$query = $this->updateCelulas($nome,$dias,$hora,$local,$pastor,$coordenador,$lider1,$lider2,$id);
}

echo $query;


?>