<?php

$pagina = 'eventos';
$obs = $_POST['obs'];
$id = @$_POST['id-obs'];

$query = $this->obsEventos($dados,$id);

echo $query;


?>