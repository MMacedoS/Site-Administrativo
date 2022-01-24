<?php

$pagina = 'tarefas';
$id = @$_POST['id'];
$ativar = @$_POST['ativar'];

$query = $this->mudaStatusTarefas($ativar,$id);

echo $query;
?>