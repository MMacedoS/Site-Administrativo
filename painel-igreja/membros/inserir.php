<?php

$pagina = 'membros';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$data_nasc = $_POST['data_nasc'];
$igreja = $_POST['igreja'];
$data_bat = $_POST['data_bat'];
$cargo = $_POST['cargo'];
$id = @$_POST['id'];



$res = $this->getMembros($cpf);
// var_dump($res);
// echo "opapapa";
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
 echo 'O CPF já está cadastrado nessa ou em outra filial!';
	exit();
}

$res = $this->getMembros($email);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id_reg != $id){
	echo 'O Email já está cadastrado nessa ou em outra filial!';
	exit();
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
if($ext == 'jpg' or $ext == 'jpeg'){ 
	move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida, somente JPG ou JPEG!';
	exit();
}



if($id == "" || $id == 0){
	$res=$this->insertMembros($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$data_bat,$cargo);
}else{
	if($imagem == "sem-foto.jpg"){
		$res=$this->UpdateMembros($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$data_bat,$cargo,$id);
// 		$query = $pdo->prepare("UPDATE $pagina SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone, endereco = :endereco, data_nasc = '$data_nasc', igreja = '$igreja', data_batismo = '$data_bat', cargo = '$cargo' where id = '$id'");
	}else{

// 		
		$res = $this->getMembros($cpf);
		$foto = $res[0]['foto'];
		$idFoto=$res[0]['id'];
		if($foto != "sem-foto.jpg" && $id=$idFoto){
			@unlink(IMAGEM.'\\img\\membros\\'.$foto);	
		}
 		$res=$this->UpdateMembros($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$data_bat,$cargo,$id);
// 		$query = $pdo->prepare("UPDATE $pagina SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone, endereco = :endereco, foto = '$imagem', data_nasc = '$data_nasc', igreja = '$igreja', data_batismo = '$data_bat', cargo = '$cargo' where id = '$id'");
	}
	


}



echo $res;


?>