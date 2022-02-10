<?php
$pagina = 'anexos';
$id = @$_POST['id-excluir'];

//excluir a imagem

$res = $this->getAnexosId($id);
$foto = $res[0]['arquivo'];
if($foto != "sem-foto.jpg"){
	@unlink(IMAGEM.'/img/documentos/'.$foto);	
}


$query = $this->deleteAnexos($id);

echo $query;
?>