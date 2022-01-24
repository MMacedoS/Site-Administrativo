<?php
$pagina = 'tesoureiros';
$id = @$_POST['id-excluir'];

//excluir a imagem

$res = $this->getTesoureiros($id);
$foto = $res[0]['foto'];
if($foto != "sem-foto.jpg"){
	@unlink(IMAGEM.'/img/membros/'.$foto);	
}


$query = $this->deleteTesoureiros($id);


echo $query;
?>