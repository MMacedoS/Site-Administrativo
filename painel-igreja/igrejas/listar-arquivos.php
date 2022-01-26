<?php

$id = @$_POST['id'];


$res = $this->getVerificaDocumento($id);
$total_reg = count($res);
if($total_reg > 0){
	for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){} 
		$arquivo = $res[$i]['arquivo'];
		$dataF = implode('/', array_reverse(explode('-', $res[$i]['data'])));
		//EXTRAIR EXTENSÃO DO ARQUIVO
					$ext = pathinfo($arquivo, PATHINFO_EXTENSION);   
					if($ext == 'pdf'){ 
						$tumb_arquivo = 'pdf.png';
					}else if($ext == 'rar' || $ext == 'zip'){
						$tumb_arquivo = 'rar.png';
					}else if($ext == 'doc' || $ext == 'docx'){
						$tumb_arquivo = 'word.png';
					}else{
						$tumb_arquivo = $arquivo;
					}
		echo '<a class="text-dark" href="'.ROTA_IGREJA.'/img/documentos/'.$arquivo.'" target="_blank" title="'.$arquivo.'">';
		echo '<img src="'.ROTA_IGREJA.'/img/documentos/'.$tumb_arquivo.'" width="15px" class="mx-1">';	
		echo '<small>'.$res[$i]['nome']. ' - Data: '.$dataF .'</small><hr style="margin:3px">';
		echo '</a>';
	}
}else{
	echo 'Nenhum arquivo Anexado';
}


?>