<?php 


$celula = @$_POST['celula'];
$igreja = @$_POST['igreja'];

echo '<label for="exampleFormControlInput1" class="form-label">Lista de Membros</label>';
echo '<select class="form-control sel22" name="membro" style="width:100%;">';

$res = $this->getMembrosAtivos($igreja);
$total_reg = count($res);
if($total_reg > 0){

	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){} 

			$nome_reg = $res[$i]['nome'];
		$id_reg = $res[$i]['id'];

		$res2 = $this->getGruposMembrosId($igreja,$id_reg,$celula);
		if(@count($res2) == 0){
			echo '<option value="'.$id_reg.'">'.$nome_reg.'</option>';
		}
	}

}

		
echo '</select>';

?>

<script>
					$(document).ready(function() {
						$('.sel22').select2({

							dropdownParent: $('#modalAddMembros')
						});
					});
				</script>