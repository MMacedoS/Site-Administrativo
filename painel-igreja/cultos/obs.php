<?php
$pagina = 'cultos';
$obs = $_POST['obs'];
$id = @$_POST['id-obs'];

$query = $this->updateObs($obs,$id);

echo $query;


?>