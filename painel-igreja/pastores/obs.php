<?php
$pagina = 'pastores';
$obs = $_POST['obs'];
$id = @$_POST['id-obs'];

$query = $this->obsPastores($obs,$id);

echo $query;


?>