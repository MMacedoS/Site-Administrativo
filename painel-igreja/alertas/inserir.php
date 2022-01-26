<?php
@session_start();
$id_usuario = @$_SESSION['id_usuario'];
$pagina = 'alertas';
$titulo = $_POST['titulo'];
$link = $_POST['link'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];

$id = @$_POST['id'];
$igreja = $_POST['igreja'];



//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['imagem']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = IMAGEM.'\\img\\alertas\\' .$nome_img;
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
	$query = $this->insertAlertas($titulo,$id_usuario,$data,$igreja,"Não",$imagem,$link,$descricao);
	
}else{

		$res = $this->getAlertas($id);
		$foto = $res[0]['imagem'];
		if($foto != "sem-foto.jpg"){
			@unlink(IMAGEM.'\\img\\alertas\\'.$foto);	
		}

	if($imagem == "sem-foto.jpg"){
		$query = $this->updateAlertas($titulo,$id_usuario,$data,$igreja,"Sim",$foto,$link,$descricao,$id);
	}else{

	
		$query = $this->updateAlertas($titulo,$id_usuario,$data,$igreja,"Sim",$imagem,$link,$descricao,$id);
	}
	
	
}



echo $query;


?>