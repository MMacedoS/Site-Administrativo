<?php 


$celula = @$_POST['celula'];
$igreja = @$_POST['igreja'];

$res = $this->gruposMembros($igreja,$celula);
$total_reg = count($res);
if($total_reg > 0){

	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){} 
			$id = $res[$i]['id'];
			$membro = $res[$i]['membro'];
			$data = $res[$i]['data'];
			$dataF = implode('/', array_reverse(explode('-', $data)));
			$res_con = $this->getMembrosId($membro);
					if(count($res_con) > 0){
						$nome_membro = $res_con[0]['nome'];
					}

			 echo '<small>'.$nome_membro. '<small> - Membro Desde : ' .$dataF .'</small></small> 
			 <a href="#" onclick="excluirMembro('.$id.')" title="Excluir Membro"><i class="bi bi-person-dash mx-1 text-danger"></i></a><hr style="margin:3px">';

		}
}

?>