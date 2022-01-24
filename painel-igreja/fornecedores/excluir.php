<?php
$pagina = 'fornecedores';
$id = @$_POST['id-excluir'];

$query = $this->deleteFornecedores($id);


echo $query;
?>