<?php

$pagina = 'documentos';
$id = @$_POST['id-excluir'];

//excluir a imagem

$res = $this->getDocumentoId($id);
$foto = $res[0]['arquivo'];
if($foto != "sem-foto.jpg"){
	@unlink(IMAGEM.'\\img\\documentos\\'.$foto);	
}


$query = $this->deleteDocumentos($id);

echo $query;
?>