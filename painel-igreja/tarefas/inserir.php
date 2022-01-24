<?php
$pagina = 'tarefas';
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$igreja = $_POST['igreja'];
$id = @$_POST['id'];





if($id == "" || $id == 0){	

$res = $this->getTarefasHora($data,$hora,$igreja);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O horário está indisponível!';
	exit();
}

	$query = $this->insertTarefas($titulo,$descricao,$data,$hora,$igreja);

}else{
	$query = $this->updateTarefas($id,$titulo,$descricao,$data,$hora,$igreja);
}

echo $query;


?>