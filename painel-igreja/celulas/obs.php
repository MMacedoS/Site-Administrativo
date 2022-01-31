<?php

$pagina = 'celulas';
$obs = $_POST['obs'];
$id = @$_POST['id-obs'];

$query = $this->obsCelulas($obs,$id);

echo $query;


?>