<?php

$id = @$_POST['id-add'];
$igreja = @$_POST['id-igreja'];
$membro = @$_POST['membro'];



$res = $this->getCelulasMembrosId($igreja,$membro,$id);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O Membro já está Adicionado!';
	exit();
}

$query=$this->addMembroCelulas($membro,$id,$igreja);

echo $query;


?>