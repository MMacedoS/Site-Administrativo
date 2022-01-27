<?php

$pagina = 'receber';
$id = @$_POST['id-excluir'];


$query = $this->deleteReceber($id);

echo $query;
?>