<?php

$pagina = 'fornecedores';
$nome = $_POST['nome'];
$produto = $_POST['produto'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$id = @$_POST['id'];
$id_igreja = @$_POST['id_igreja'];

if($id_igreja == ""){
	$id_igreja = 1;
}

if($email != ""){
	$res = $this->getFornecedores($email);
	
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id_reg != $id){
		echo 'O Email já está cadastrado!';
		exit();
	}

}



if($id == "" || $id == 0){
	$query = $this->insertFornecedores($nome,$produto,$email,$endereco,$telefone,$id_igreja);
	
}else{
	$query = $this->updateFornecedores($id,$nome,$produto,$email,$endereco,$telefone,$id_igreja);
	
}


echo $query;


?>