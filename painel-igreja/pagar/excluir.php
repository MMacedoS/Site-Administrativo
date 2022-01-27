<?php

$pagina = 'pagar';
$id = @$_POST['id-excluir'];

//excluir a imagem

$res = $this->getPagar($id);
$foto = $res[0]['arquivo'];
if($foto != "sem-foto.jpg"){
	@unlink(IMAGEM.'\\img\\pagar\\'.$foto);	
}


$query = $this->deletePagar($dados);

echo $query;
?>