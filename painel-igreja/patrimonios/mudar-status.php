<?php

$pagina = 'patrimonios';
$id = @$_POST['id'];
$ativar = @$_POST['ativar'];


$query=$this->mudarStatusPatrimonios($ativar,$id);
echo $query;
?>