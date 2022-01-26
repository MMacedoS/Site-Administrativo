<?php
$pagina = 'igrejas';

$id = @$_POST['id-img'];


//SCRIPT PARA SUBIR FOTO NO BANCO LOGO JPG
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['logojpg']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);
$dir = __DIR__;
$dir=str_replace("igrejas","",$dir);

// echo $dir;
// die;
require_once $dir."Controller\Controller.php";
require_once $dir."Controller\CadastroController.php";
require_once $dir."Model\CadastroModel.php";

$con=new CadastroController();

$caminho = $dir.'\\img\\igrejas\\' .$nome_img;
if (@$_FILES['logojpg']['name'] == ""){
	$logojpg = "sem-foto.jpg";
}else{
	$logojpg = $nome_img;
}

$imagem_temp = @$_FILES['logojpg']['tmp_name']; 
$ext = pathinfo($logojpg, PATHINFO_EXTENSION);   
if($ext == 'jpg' or $ext == 'jpeg' or $ext == 'png'){ 
	move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida para a imagem da Logo!. Somente JPG para os Relatórios';
	exit();
}




//SCRIPT PARA SUBIR FOTO NO BANCO CAB RELATORIO
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['cabjpg']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = $dir.'\\img\\igrejas\\' .$nome_img;
if (@$_FILES['cabjpg']['name'] == ""){
	$cabjpg = "sem-foto.jpg";
}else{
	$cabjpg = $nome_img;
}

$imagem_temp = @$_FILES['cabjpg']['tmp_name']; 
$ext = pathinfo($cabjpg, PATHINFO_EXTENSION);   
if($ext == 'jpg' or $ext == 'jpeg' or $ext == 'png'){ 
	move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida para a imagem do Cabeçalho. Somente JPG para os Relatórios';
	exit();
}





//SCRIPT PARA SUBIR FOTO NO BANCO CAB RELATORIO
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['cartjpg']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = $dir.'\\img\\igrejas\\' .$nome_img;
if (@$_FILES['cartjpg']['name'] == ""){
	$cartjpg = "sem-foto.jpg";
}else{
	$cartjpg = $nome_img;
}

$imagem_temp = @$_FILES['cartjpg']['tmp_name']; 
$ext = pathinfo($cartjpg, PATHINFO_EXTENSION);   
if($ext == 'jpg' or $ext == 'jpeg' or $ext == 'png'){ 
	move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida para a imagem da Carteirinha. Somente JPG para os Relatórios';
	exit();
}

	
$query=$con->updateImagemIgreja($id,$logojpg,$cabjpg,$cartjpg);

echo $query;


?>