<?php

$pagina = 'doacoes';
$id = @$_POST['id-excluir'];


$query = $this->deleteDoacoes($id);


echo $query;
?>