<?php
require_once("../conexao.php");
$nome = $_POST['nome_igr'];
$telefone = $_POST['tel_igr'];
$endereco = $_POST['end_igr'];
$email = $_POST['email_igr'];
$qtd_tar = $_POST['qtd_tar_igr'];
$limitar_tesoureiro = $_POST['limitar_tesoureiro'];
$relatorio_pdf = $_POST['relatorio_pdf'];
$cabecalho_rel_img = $_POST['cabecalho_rel_img'];
$itens_por_pagina = $_POST['itens_por_pagina'];

$query = $pdo->prepare("UPDATE config SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email, qtd_tarefas = '$qtd_tar', limitar_tesoureiro = '$limitar_tesoureiro', relatorio_pdf = '$relatorio_pdf', cabecalho_rel_img = '$cabecalho_rel_img', itens_por_pagina = '$itens_por_pagina'");
$query->bindValue(":nome", "$nome");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":email", "$email");
$query->execute();

echo 'Salvo com Sucesso';


 ?>