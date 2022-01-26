<?php

$pagina = 'alertas';
$id = @$_POST['id-excluir'];

//excluir a imagem

$res = $this->getAlertas($id);
$foto = $res[0]['imagem'];
if($foto != "sem-foto.jpg"){
	@unlink(IMAGEM.'/img/alertas/'.$foto);	
}


$query = $this->deleteAlertas($id);

echo $query;
?>