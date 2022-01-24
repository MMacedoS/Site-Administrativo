<?php

$pagina = 'igrejas';
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$pastor = @$_POST['pastor'];
$video = @$_POST['video'];
$email = @$_POST['email'];
$id = @$_POST['id'];



$res = $this->getVerificaIgreja($nome);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O '.$nome.' da Igreja já está cadastrado!';
	exit();
}

$res = $this->getVerificaIgreja($email);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O '.$email.' da Igreja já está cadastrado!';
	exit();
}
//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['imagem']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = IMAGEM.'/img/igrejas/' .$nome_img;
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
	$query = $this->insertIgreja($nome,$telefone,$endereco,$video,$email,$imagem,$pastor);

	
}else{
	if($imagem == "sem-foto.jpg"){
		$query = $this->updateIgreja($id,$nome,$telefone,$endereco,$video,$email,$imagem,$pastor);
	}else{

		
		$res = $this->getVerificaIgreja($id);
		$foto = $res[0]['imagem'];
		if($foto != "sem-foto.jpg"){
			@unlink(IMAGEM.'/img/igrejas/'.$foto);	
		}

		$query = $this->updateIgreja($id,$nome,$telefone,$endereco,$video,$email,$imagem,$pastor);
	}
	

	
}

echo $query;


?>