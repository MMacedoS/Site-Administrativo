<?php
$pagina = 'usuarios';
$senha = $_POST['senha'];
$id = @$_POST['id'];

$query = $this->updateUsuarios($senha,$id);

echo $query;


?>