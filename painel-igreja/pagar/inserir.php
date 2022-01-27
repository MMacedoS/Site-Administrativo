<?php

@session_start();
$id_usuario = @$_SESSION['id_usuario'];
$pagina = 'pagar';
$descricao = $_POST['descricao'];
$fornecedor = $_POST['fornecedor'];
$valor = $_POST['valor'];
$vencimento = $_POST['vencimento'];
$frequencia = $_POST['frequencia'];
$igreja = $_POST['igreja'];

$valor = str_replace(',', '.', $valor);

$id = @$_POST['id'];


//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['imagem']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = IMAGEM.'\\img\\contas\\' .$nome_img;
if (@$_FILES['imagem']['name'] == ""){
	$imagem = "sem-foto.jpg";
}else{
	$imagem = $nome_img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 
$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'JPG' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'pdf' or $ext == 'rar' or $ext == 'zip'){ 
	move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}



if($id == "" || $id == 0){
	$query = $this->insertPagar($descricao,$fornecedor,$valor,$frequencia,$vencimento,$id_usuario,"Não",$igreja,$imagem);

}else{
	$res = $this->getPagar($id);
		$foto = $res[0]['arquivo'];
		$pago = $res[0]['pago'];
		if($foto != "sem-foto.jpg"){
			@unlink(IMAGEM.'\\img\\contas\\'.$foto);	
		}

	if($imagem == "sem-foto.jpg"){
		$query = $this->updatePagar($id,$descricao,$fornecedor,$valor,$frequencia,$vencimento,$id_usuario,$pago,$igreja,$foto);
	}else{
		$query = $this->updatePagar($id,$descricao,$fornecedor,$valor,$frequencia,$vencimento,$id_usuario,$pago,$igreja,$imagem);
	}
	

}



echo $query;


?>