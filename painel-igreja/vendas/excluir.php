<?php
$pagina = 'vendas';
$id = @$_POST['id-excluir'];

$query = $this->deleteVendas($id);

echo $query;
?>