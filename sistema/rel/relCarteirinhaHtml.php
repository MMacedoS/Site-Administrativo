<?php 
require_once("conexaoRel.php"); 


// Realizamos a importação da biblioteca para gerar QR Code.

require_once '../vendor/autoload.php';

use chillerlan\QRCode\QRCode;
//CARREGAR DOMPDF
$id = $_GET['id'];

$data = "http://$_SERVER[HTTP_HOST]/sisigreja/home/verifica/{$id}"; //inserindo a URL do iMasters


$nome_sede = $nome_igreja_sistema;

$query = $pdo->query("SELECT * FROM membros where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome = $res[0]['nome'];
$igreja = $res[0]['igreja'];
$cpf = $res[0]['cpf'];
$foto = $res[0]['foto'];
$data_nasc = $res[0]['data_nasc'];
$cargo = $res[0]['cargo'];

$query = $pdo->query("SELECT * FROM igrejas where id = '$igreja'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_igreja = $res[0]['nome'];
$tel_igreja = $res[0]['telefone'];
$end_igreja = $res[0]['endereco'];
$imagem_igreja = $res[0]['imagem'];
$pastor_igreja = $res[0]['pastor'];
$logo_rel = $res[0]['logo_rel'];
$cart_rel = $res[0]['carteirinha_rel'];


if($logo_rel != 'sem-foto.jpg'){ 
	$imagem_igreja = $logo_rel;

}else{
	$imagem_igreja = 'logo-rel.jpg';
}


if($cart_rel != 'sem-foto.jpg'){ 
	$imagem_carteirinha = $cart_rel;

}else{
	$imagem_carteirinha = 'carteirinha-cab.jpg';
}

$dados_igreja = $end_igreja . ' '.$tel_igreja;




$query = $pdo->query("SELECT * FROM cargos where id = '$cargo'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_cargo = $res[0]['nome'];


$data_nasc = implode('/', array_reverse(explode('-', $data_nasc)));
$data_hoje = 'Emitida em: '. implode('/', array_reverse(explode('-', date('Y-m-d'))));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Carteirinha do Membro</title>
	<link rel="shortcut icon" href="../img/favicon.ico" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

	
	<style>

 @page {
            margin: 0px;
            
        }


.imagem {
    margin-top:0px;
	position: absolute;
width: 100%;
}

.imagem-2 {
    margin-top:2px;
	position: absolute;
width: 100%;
/* opacity: 0; */
}



.qr {
position: relative;
width:100%;
height:200vh;
border-radius:7px;
}

.area-qr{
	position: fixed;
    margin-top: 1.95 em;
    width: 60%;
    margin-left:5.82 em;    
   
}
.imagem-qr {
position: relative;
width:80%;
}

.imagem-igreja {
position: absolute;
margin-top: 5px;
width:60px;
margin-left: 10px;
}	

.nome-membro {
	position: absolute;
    margin-top: 60px;
    margin-left: 150px;
    color: #913610;
    font-size: 9px;
    width: 100%;

}


.imagem-membro {
position: absolute;
width:100%;
height:100%;
border-radius:7px;
}	

.area-foto{
	position: absolute;
    margin-top: 82px;
    width: 70px;
    height: 90px;
    margin-left: 30px;
    border-radius: 7px;
}

.nome-sede {
position: absolute;
margin-top: 9px;
margin-left: 95px;
color:#545454;
font-size:11px;
width:100%;

}


.dados-igreja {
position: absolute;
margin-top: 24px;
margin-left: 95px;
color:#545454;
font-size:5px;
width:100%;

}


.data-atual {
    position: absolute;
    margin-top: 172px;
    margin-left: 37px;
    color: #913610;
    font-size: 5px;
    width: 100%;


}


.cargo {
    position: absolute;
    margin-top: 92px;
    margin-left: 152px;
    color: #545454;
    font-size: 8px;
    width: 100%;

}


.congregacao {
	position: absolute;
    margin-top: 124px;
    margin-left: 152px;
    color: #545454;
    font-size: 8px;
    width: 100%;

}


.nascimento {
	position: absolute;
    margin-top: 155px;
    margin-left: 154px;
    color: #545454;
    font-size: 8px;
    width: 100%;

}


.cpf {
    position: absolute;
    margin-top: 156px;
    margin-left: 243px;
    color: #545454;
    font-size: 8px;
    width: 100%;
}





</style>


<body>

<?php if($cabecalho_rel_img != 'Sim'){ ?>
<div class="nome-sede"> <?php echo mb_strtoupper($nome_igreja); ?></div>
<div class="dados-igreja"> <?php echo $dados_igreja; ?></div>
<img class="imagem-igreja" src="<?= $url_imagens ?>/painel-igreja/img/igrejas/<?= $imagem_igreja ?>">
<!-- <img class="imagem" src="<php echo $url_imagens ?>/painel-igreja/img/igrejas/carteirinha.jpeg"> -->
<?php }else{ ?>
<img class="imagem" src="<?= $url_imagens ?>/painel-igreja/img/igrejas/<?= $imagem_carteirinha ?>">
<?php } ?>


<div class="congregacao"> <?php echo mb_strtoupper($nome_igreja); ?></div>
<div class="nome-membro"> <?php echo substr(mb_strtoupper($nome),0,30); ?></div>
<div class="cargo"> <?php echo mb_strtoupper($nome_cargo); ?></div>
<div class="nascimento"> <?php echo $data_nasc; ?></div>
<div class="cpf"><?php echo $cpf; ?> </div>
<div class="data-atual"><?php echo $data_hoje; ?> </div>

<div class="area-foto">
<img class="imagem-membro" src="<?php echo $url_imagens ?>/painel-igreja/img/membros/<?php echo $foto ?>">
</div>

<div class="qr">
<img class="imagem-2" src="<?= $url_imagens ?>/painel-igreja/img/igrejas/baseqr.jpg">
<div class="area-qr">
<img class="imagem-qr" src="<?=(new QRCode)->render($data)?>">
</div>

</div>

</body>


</html>