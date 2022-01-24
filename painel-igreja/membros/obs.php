<?php

$pagina = 'membros';
$obs = $_POST['obs'];
$id = @$_POST['id-obs'];

$query = $this->obsMembros($obs,$id);

echo $query;


?>