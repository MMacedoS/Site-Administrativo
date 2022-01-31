<?php
$pagina = 'patrimonios';
@session_start();
$id_usuario = @$_SESSION['id_usuario'];

$id = @$_POST['id-transferir'];
$id_igreja = @$_POST['igreja'];


$query = $this->transferirPatrimonios($id_igreja,$id_usuario,$id);
echo $query;
?>