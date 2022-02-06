<?php 


require_once("conexaoRel.php");

$igreja = $_POST['igreja'];
$status = $_POST['status'];
$cargo = $_POST['cargo'];
//ALIMENTAR OS DADOS NO RELATÓRIO
$html = file_get_contents($url_sistema."rel/relMembrosHtml.php?igreja=$igreja&status=$status&cargo=$cargo");

if($relatorio_pdf != 'Sim'){
	echo $html;
	exit();
}
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;


header("Content-Transfer-Encoding: binary");
header("Content-Type: image/png");

//INICIALIZAR A CLASSE DO DOMPDF
$options = new Options();
$options->set('isRemoteEnabled', true);
// $pdf = new DOMPDF($options);
$dompdf = new Dompdf($options);


// //Definir o tamanho do papel e orientação da página
$pdf->set_paper(array(0, 0, 841.89, 595.28)); // tamanho folha A4 (Paisagem)
// $dompdf->set_paper(array(0, 0, 255.11, 138.73)); // tamanho folha 9x5 cm (Paisagem)


// //CARREGAR O CONTEÚDO HTML
$dompdf->load_html($html);

//RENDERIZAR O PDF
$dompdf->render();

// //NOMEAR O PDF GERADO
$dompdf->stream(
	'membros.pdf',
array("Attachment" => false)
);


 ?>