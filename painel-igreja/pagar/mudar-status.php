<?php

$pagina = 'pagar';
$id = @$_POST['id'];

@session_start();
$id_usuario = @$_SESSION['id_usuario'];

$query = $this->mudaStatusPagar($id_usuario,$id);


//RECUPERAR INFORMAÇÕES DA CONTA

$res = $this->getPagar($id);
$valor = $res[0]['valor'];
$descricao = $res[0]['descricao'];
$frequencia = $res[0]['frequencia'];
$vencimento = $res[0]['vencimento'];
$fornecedor = $res[0]['fornecedor'];
$arquivo = $res[0]['arquivo'];
$igreja = $res[0]['igreja'];
$frequencia = $res[0]['frequencia'];

//INSIRO NAS MOVIMENTACOES

// $pdo->query("INSERT INTO movimentacoes SET tipo = 'Saída', movimento = 'Conta à Pagar', 
// descricao = '$descricao', valor = '$valor', data = curDate(), usuario = '$id_usuario', id_mov = '$id', igreja = '$igreja'");



//CRIAR A PRÓXIMA CONTA A PAGAR
	if($frequencia > 0){	
	$dias_frequencia = $frequencia;
	if($dias_frequencia == 30 || $dias_frequencia == 31){
		
		$nova_data_vencimento = date('Y/m/d', strtotime("+1 month",strtotime($vencimento)));

	}else if($dias_frequencia == 90){ 
		
		$nova_data_vencimento = date('Y/m/d', strtotime("+3 month",strtotime($vencimento)));

	}else if($dias_frequencia == 180){ 

		$nova_data_vencimento = date('Y/m/d', strtotime("+6 month",strtotime($vencimento)));

	}else if($dias_frequencia == 360){ 

		$nova_data_vencimento = date('Y/m/d', strtotime("+1 year",strtotime($vencimento)));

	}else{
		$nova_data_vencimento = date('Y/m/d', strtotime("+$dias_frequencia days",strtotime($vencimento))); 
	}


	// if($query1=="Salvo com Sucesso")
	// {
	// //criar a nova conta
	// // $query = $pdo->query("INSERT INTO $pagina SET descricao = '$descricao', fornecedor = '$fornecedor', valor = '$valor', 
	// // data = curDate(), vencimento = '$nova_data_vencimento', usuario_cad = '$id_usuario', pago = 'Não', igreja = '$igreja', frequencia = '$frequencia', arquivo = '$arquivo'");
	// $query = $this->insertPagar($descricao,$fornecedor,$valor,$frequencia,$nova_data_vencimento,$id_usuario,"Não",$igreja,$arquivo);
	// }
}


echo $query;
?>