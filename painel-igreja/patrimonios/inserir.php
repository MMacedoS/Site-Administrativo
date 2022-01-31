<?php

@session_start();
$id_usuario = @$_SESSION['id_usuario'];
$pagina = 'patrimonios';
$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$valor = str_replace(',', '.', $valor);
$entrada = $_POST['entrada'];
$doador = $_POST['doador'];
$data_cad = $_POST['data_cad'];

$id = @$_POST['id'];
$igreja = $_POST['igreja'];
$igreja_cad=$igreja;
$igreja_item=$igreja;
if($entrada == 'Compra'){
	if($valor == ''){
		echo 'Preencha o Valor';
		exit();
	}
}else{
	if($doador == ''){
		echo 'Preencha o Doador';
		exit();
	}
}


$res = $this->getPatrimonios($codigo);
$id_reg = @$res[0]['id'];
$nome_item = @$res[0]['nome'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O Código do Item já está cadastrado no item '.$nome_item.' !';
	exit();
}


//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['imagem']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = IMAGEM.'\\img\\patrimonios\\' .$nome_img;
if (@$_FILES['imagem']['name'] == ""){
	$imagem = "sem-foto.jpg";
}else{
	$imagem = $nome_img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 
$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'JPG' or $ext == 'jpeg' or $ext == 'gif'){ 
	move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}



if($id == "" || $id == 0){

	$query= $this->insertPatrimonios($codigo,$nome,$descricao,$valor,$id_usuario,$data_cad,$igreja_cad,$igreja_item,"Sim",$entrada,$doador,$imagem);

	
}else{
	$res = $this->getPatrimonios($id);
		$foto = $res[0]['foto'];
		if($foto == "sem-foto.jpg"){
			@unlink(IMAGEM.'\\img\\patrimonios\\'.$foto);
		}
		
	if($imagem == "sem-foto.jpg"){
		

		$query=$this->updatePatrimonios($codigo,$nome,$descricao,$valor,$entrada,$doadors,$foto,$id);
	}else{
		
		
		$query=$this->updatePatrimonios($codigo,$nome,$descricao,$valor,$entrada,$doador,$imagem,$id);
		
	}
	
	
}



echo $query;


?>