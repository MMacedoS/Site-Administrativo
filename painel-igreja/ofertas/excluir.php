<?php
$pagina = 'ofertas';
$id = @$_POST['id-excluir'];


$query = $this->deleteOfertas($id);

echo $query;
?>