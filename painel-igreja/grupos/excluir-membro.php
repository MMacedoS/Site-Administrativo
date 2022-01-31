<?php


$id = @$_POST['id'];

$query = $this->deleteMembroGrupos($id);
echo $query;
?>