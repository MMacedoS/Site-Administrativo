<?php

$pagina = 'patrimonios';
$obs = $_POST['obs'];
$id = @$_POST['id-obs'];


$query = $this->obsPatrimonios($obs,$id);



echo $query;


?>