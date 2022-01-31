<?php

$pagina = 'grupos';
$id = @$_POST['id-excluir'];


$query = $this->deleteGrupos($id);


echo $query;
?>