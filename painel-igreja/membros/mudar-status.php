<?php

$pagina = 'membros';
$id = @$_POST['id'];
$ativar = @$_POST['ativar'];

$query = $this->mudaStatusMembros($ativar,$id);

echo $query;
?>