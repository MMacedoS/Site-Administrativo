<?php

$pagina = 'alertas';
$id = @$_POST['id'];
$ativar = @$_POST['ativar'];

$res = $this->getAlertas($id);
$id_igreja =$res[0]['igreja'];
$ativo =$res[0]['ativo'];


	$res = $this->getAlertasAtivo("Sim",$id_igreja);
	$total_reg = count($res);
if($ativar == 'Sim' && $total_reg > 0){	
		echo 'Nao é possível ter dois alertas ativos, desative um dos alertas para ativar este!';
		exit();
}else{
		$res = $this->updateStatusAlertas($ativar,$id);
}

echo $res;
?>