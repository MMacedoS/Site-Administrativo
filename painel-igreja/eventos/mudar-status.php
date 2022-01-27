<?php

$pagina = 'eventos';
$id = @$_POST['id'];
$dados = @$_POST['ativar'];

$query = $this->mudaStatusEventos($dados,$id);

echo $query;
?>