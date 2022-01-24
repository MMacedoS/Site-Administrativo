<?php

$pagina = 'membros';
$id = @$_POST['id-excluir'];

//excluir a imagem

$res=$this->getMembros($id);
$foto = $res[0]['foto'];
if($foto != "sem-foto.jpg"){
	@unlink(IMAGEM.'\\img\\membros\\'.$foto);	
}


$query = $this->deleteMembros($id);

echo $query;
?>