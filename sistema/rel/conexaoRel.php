<?php 
date_default_timezone_set('America/Sao_Paulo');

$banco = "igreja";
$servidor = "localhost";
$usuario = "root";
$senha = "";

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor", "$usuario", "$senha");
} catch (Exception $e) {
	echo 'Erro ao conectar com o Banco de Dados! <br><br>' .$e;
}



$url_sistema = "http://$_SERVER[HTTP_HOST]/sisigreja/sistema/";
$url_imagens = "http://$_SERVER[HTTP_HOST]/sisigreja/";
// $url = explode("//", $url_sistema);
// if($url[1] == 'localhost/sistema/'){
// 	$url_sistema = "http://$_SERVER[HTTP_HOST]/sisigreja/sistema/";
//     $url_imagens = "http://$_SERVER[HTTP_HOST]/sisigreja/";
// }


$email_super_adm = "sistemasparaigrejas@gmail.com"; //email principal da igreja
$nome_igreja_sistema = "Igreja Pentecostal";
$telefone_igreja_sistema = '(00) 00000-0000';
$endereco_igreja_sistema = 'Rua A, Número 150, Bairro XX - Belo Horizonte - MG';



//VARIAVEIS GLOBAIS
$quantidade_tarefas = 20; //exibir as proximas 20 tarefas no painel da igreja
$limitar_tesoureiro = 'Sim'; //Se tiver sim, o tesoureiro nao poderá excluir e nem editar as ofertas e dizimos.
$relatorio_pdf = 'Sim'; //SE ESSA OPÇÃO ESTIVER NÃÕ, O RELATÓRIO SERÁ GERADO EM HTML
$cabecalho_rel_img = 'Sim'; //SE ESSA OPÇÃO ESTIVER SIM, O RELATÓRIO TERÁ UMA IMAGEM NO CABEÇALHO, CADA IGREJA DEVERÁ SUBIR A SUA IMAGEM JPG NO CADASTRO DE IGREJAS
$itens_por_pagina = 9;


//BUSCAR INFORMAÇÕES DE CONFIGURAÇÕES NO BANCO
$query = $pdo->query("SELECT * FROM config");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$email_super_adm = $res[0]['email'];
$nome_igreja_sistema = $res[0]['nome'];
$telefone_igreja_sistema = $res[0]['telefone'];
$endereco_igreja_sistema = $res[0]['endereco'];
$quantidade_tarefas = $res[0]['qtd_tarefas'];
$limitar_tesoureiro = $res[0]['limitar_tesoureiro'];
$relatorio_pdf = $res[0]['relatorio_pdf'];
$cabecalho_rel_img = $res[0]['cabecalho_rel_img'];
$itens_por_pagina = $res[0]['itens_por_pagina'];
 ?>