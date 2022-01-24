<?php

$pagina = 'secretarios';
$id = @$_POST['id-excluir'];

//excluir a imagem

$res = $this->getSecretarios($id);
$foto = $res[0]['foto'];
if($foto != "sem-foto.jpg"){
	@unlink(IMAGEM.'/img/membros/'.$foto);	
}


$query = $this->deleteSecretarios($id);

echo $query;
?>