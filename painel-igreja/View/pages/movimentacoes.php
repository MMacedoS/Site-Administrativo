<?php 
require_once("verificar.php");
require_once("deslogar-secretario.php");
$pagina = 'movimentacoes';

if(@$_GET['filtrar'] == 'Entradas'){
	$classe_entradas = 'text-primary';
	$classe_saidas = 'text-dark';
	$classe_todas = 'text-dark';

	$query = $this->getMovEntradas($id_igreja);

}else if(@$_GET['filtrar'] == 'Saídas'){
	$classe_entradas = 'text-dark';
	$classe_saidas = 'text-primary';
	$classe_todas = 'text-dark';

	$query = $this->getMovSaidas($id_igreja);

}else{
	$classe_entradas = 'text-dark';
	$classe_saidas = 'text-dark';
	$classe_todas = 'text-primary';

	$query = $this->getMovimentacaoes($id_igreja);
}



?>

<div class="row my-3">
		
	<div class="col-md-12">
		<small>
		<a href="index.php?pag=<?php echo $pagina ?>" class="<?php echo $classe_todas ?>"> Todas </a> /
		<a href="index.php?pag=<?php echo $pagina ?>&filtrar=Entradas" class="<?php echo $classe_entradas ?>"> Entradas </a> / 
		<a href="index.php?pag=<?php echo $pagina ?>&filtrar=Saídas" class="<?php echo $classe_saidas ?>"> Saídas </a> 
		
		</small>
	</div>
	
</div>


<div class="tabela bg-light">
	<?php 
	$res = $query;
	$total_reg = count($res);
	if($total_reg > 0){

		?>

		<table id="example" class="table table-striped table-light table-hover my-4 my-4" style="width:100%">
			<thead>			
				<tr>
					<th>Movimento</th>
					<th class="esc">Descrição</th>
					<th >Valor</th>
					<th class="esc">Data</th>
					<th class="esc">Tesoureiro / Pastor</th>
										
				</tr>		
			</thead>
			<tbody>
				<?php 
				for($i=0; $i < $total_reg; $i++){
					foreach ($res[$i] as $key => $value){} 

						$movimento = $res[$i]['movimento'];
					$tipo = $res[$i]['tipo'];
					$valor = $res[$i]['valor'];
					$descricao = $res[$i]['descricao'];
					$data = $res[$i]['data'];
				$usuario = $res[$i]['usuario'];
					$igreja = $res[$i]['igreja'];
					$id = $res[$i]['id'];

					if($tipo == 'Entrada'){
						$classe = 'text-success';
						

					}else{
						$classe = 'text-danger';
						
					}

					

					
					$query_con = $this->getUsuario($usuario);
					$res_con = $query_con;
					if(count($res_con) > 0){
						$usuario_cad = $res_con[0]['nome'];
						
					}else{
						$usuario_cad = '';
					}


										

					$valorF = number_format($valor, 2, ',', '.');
					$data=explode(" ",$data);
					$dataF = implode('/', array_reverse(explode('-', $data[0])))." ". $data[1];
					
					?>			
					<tr class="<?php echo $classe_linha ?>">
						<td>
							<i class="bi bi-square-fill <?php echo $classe ?>"></i>
							<?php echo $movimento ?>

						</td>
						<td class="esc"><?php echo $descricao ?></td>
						<td >R$ <?php echo $valorF ?></td>
						<td class="esc"><?php echo $dataF ?></td>
						<td class="esc"><?php echo $usuario_cad ?></td>
												
					
						
						
						</tr>	
					<?php } ?>	
				</tbody>
			</table>
		<?php }else{
			echo 'Não Existem Dados Cadastrados';
		} ?>
	</div>



		<script type="text/javascript">var pag = "Cadastro/<?=$pagina?>"</script>
		<script src="<?=ROTA_JS?>/ajax.js"></script>


		
