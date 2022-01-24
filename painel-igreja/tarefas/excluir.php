<?php

$pagina = 'tarefas';
$id = @$_POST['id-excluir'];

$query = $this->deleteTarefas($id);


echo $query;
?>