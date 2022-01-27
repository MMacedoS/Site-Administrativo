<?php

$pagina = 'eventos';
$id = @$_POST['id-excluir'];

//excluir a imagem
$res = $this->getEventos($id);

$foto = $res[0]['imagem'];
if($foto != "sem-foto.jpg"){
	@unlink(IMAGEM.'/img/eventos/'.$foto);	
}


$query = $this->deleteEventos($id);

echo $query;
?>