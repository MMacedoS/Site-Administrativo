<?php

$pagina = 'pastores';
$id = @$_POST['id-excluir'];

//excluir a imagem

$res = $this->getPastores($id);
$foto = $res[0]['foto'];
if($foto != "sem-foto.jpg"){
	@unlink('../../img/membros/'.$foto);	
}


$res = $this->deletePastores($id);
// $query = $pdo->query("DELETE FROM usuarios where id_pessoa = '$id' and nivel = 'pastor'");

echo $res;
?>