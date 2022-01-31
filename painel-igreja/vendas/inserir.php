<?php
@session_start();
$id_usuario = @$_SESSION['id_usuario'];

$pagina = 'vendas';

$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$igreja = $_POST['igreja'];
$id = @$_POST['id'];


if($id == "" || $id == 0){
	$query = $this->insertVendas($descricao,$valor,$id_usuario,$igreja,$data);
	
}else{
	$query = $this->updateVendas($descricao,$valor,$id_usuario,$igreja,$data,$id);
	

	

}







echo 'Salvo com Sucesso';


?>