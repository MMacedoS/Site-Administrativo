<?php

$pagina = 'celulas';
$id = @$_POST['id-excluir'];


$query = $this->deleteCelulas($id);


echo $query;
?>