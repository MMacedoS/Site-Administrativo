<?php

$pagina = 'grupos';
$obs = $_POST['obs'];
$id = @$_POST['id-obs'];


$query = $this->obsGrupos($obs,$id);

echo $query;


?>