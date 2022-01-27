<?php

$pagina = 'dizimos';
$id = @$_POST['id-excluir'];


$query = $this->deleteDizimo($id);


echo $query;
?>