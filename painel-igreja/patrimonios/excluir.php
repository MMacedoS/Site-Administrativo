<?php

$pagina = 'patrimonios';
$id = @$_POST['id-excluir'];

//excluir a imagem

$res = $this->getPatrimonios($id);
$foto = $res[0]['foto'];
if($foto != "sem-foto.jpg"){
	@unlink(IMAGEM.'\\img\\patrimonios\\'.$foto);	
}


$query = $this->deletePatrimonios($id);

echo $query;
?>