<?php

@session_start();
$id_usuario = @$_SESSION['id_usuario'];
$pagina = 'documentos';
$descricao = $_POST['descricao'];
$nome = $_POST['nome'];
$igreja = $_POST['igreja'];
$data = $_POST['data'];
$id = @$_POST['id'];


//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['imagem']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = IMAGEM.'\\img\\documentos\\' .$nome_img;
if (@$_FILES['imagem']['name'] == ""){
	$imagem = "sem-foto.jpg";
}else{
	$imagem = $nome_img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 
$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'xlsx' or $ext == 'JPG' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'pdf' or $ext == 'rar' or $ext == 'zip' or $ext == 'docx' or $ext == 'doc'){ 
	move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}



if($id == "" || $id == 0){
	$query = $this->insertDocumento($nome,$descricao,$data,$id_usuario,$imagem,$igreja);

}else{
		$res = $this->getDocumentos($id);
		$foto = $res[0]['arquivo'];
		if($foto != "sem-foto.jpg"){
			@unlink(IMAGEM.'\\img\\documentos\\'.$foto);	
		}
	if($imagem == "sem-foto.jpg"){
		$query = $this->updateDocumento($nome,$descricao,$data,$id_usuario,$foto,$igreja,$id);
		
	}else{

		$query = $this->updateDocumento($nome,$descricao,$data,$id_usuario,$imagem,$igreja,$id);

		
	}
	

}


echo $query;


?>