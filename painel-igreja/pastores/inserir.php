<?php

$pagina = 'pastores';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$data_nasc = $_POST['data_nasc'];
$igreja = $_POST['igreja'];
$id = @$_POST['id'];



//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['imagem']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = IMAGEM.'/img/membros/' .$nome_img;
if (@$_FILES['imagem']['name'] == ""){
	$imagem = "sem-foto.jpg";
}else{
	$imagem = $nome_img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 
$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 
	move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}

if($id == "" || $id == 0){
	

$res = $this->getPastores($cpf);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O CPF já está cadastrado!';
	exit();
}

$res =$this->getPastores($email);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O Email já está cadastrado!';
	exit();
}



	$query = $this->insertPastores($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja);
}else{
	if($imagem == "sem-foto.jpg"){
		$query = $this->updatePastores($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$id);
	}else{

	    $res = $res = $this->getPastores($cpf);
		$foto = $res[0]['foto'];
		if($foto != "sem-foto.jpg"){
			@unlink(IMAGEM.'/img/membros/'.$foto);	
		}

		$query = $this->updatePastores($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$id);
	}

	
}



echo $query;


?>