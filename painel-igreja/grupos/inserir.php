<?php

$pagina = 'grupos';
$nome = $_POST['nome'];
$dias = $_POST['dias'];
$local = $_POST['local'];
$hora = $_POST['hora'];
$pastor = $_POST['pastor'];
$regente = $_POST['regente'];
$secretario = $_POST['secretario'];
$tesoureiro = $_POST['tesoureiro'];
$lider1 = $_POST['lider1'];
$lider2 = $_POST['lider2'];
$igreja = $_POST['igreja'];
$id = @$_POST['id'];



$res = $this->getGrupos($nome,$igreja);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O nome já está indisponível!';
	exit();
}


if($id == "" || $id == 0){
	 $query = $this->insertGrupos($nome,$dias,$hora,$local,$igreja,$pastor,$regente,$secretario,$tesoureiro,$lider1,$lider2);

}else{
	$query = $this->updateGrupos($nome,$dias,$hora,$local,$pastor,$regente,$secretario,$tesoureiro,$lider1,$lider2,$id);
}

echo $query;


?>