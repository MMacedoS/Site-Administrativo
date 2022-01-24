<?php
$pagina = 'tesoureiros';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$id = @$_POST['id'];
$id_igreja = @$_POST['id_igreja'];

if($id_igreja == ""){
	$id_igreja = 3;
}





//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['imagem']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = IMAGEM.'\\img\\membros\\' .$nome_img;
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

	$res = $this->getTesoureiros($cpf);
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id_reg != $id){
		echo 'O CPF já está cadastrado!';
		exit();
	}


	$res = $this->getTesoureiros($cpf);
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id_reg != $id){
		echo 'O Email já está cadastrado!';
		exit();
	}

	$query=$this->insertTesoureiros($nome,$email,$cpf,$telefone,$endereco,$imagem,$id_igreja);

}else{
	if($imagem == "sem-foto.jpg"){
		$query = $this->updateTesoureiros($id,$nome,$email,$cpf,$telefone,$endereco,$imagem,$id_igreja);
	}else{

		$res = $this->getTesoureiros($cpf);
		$foto = $res[0]['foto'];
		if($foto != "sem-foto.jpg"){
			@unlink(IMAGEM.'\\img\\membros\\'.$foto);	
		}

		$query = $this->updateTesoureiros($id,$nome,$email,$cpf,$telefone,$endereco,$imagem,$id_igreja);
	}
	
}



echo $query;


?>