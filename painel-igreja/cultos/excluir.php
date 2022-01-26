<?php
$pagina = 'cultos';
$id = @$_POST['id-excluir'];

$query = $this->deleteCultos($id);


echo $query;
?>