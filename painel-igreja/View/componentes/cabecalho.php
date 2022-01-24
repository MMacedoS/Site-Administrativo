<?php

$id_usuario = @$_SESSION['id_usuario'];
$nivel_usu = @$_SESSION['nivel_usuario'];

if($nivel_usu == 'tesoureiro'){
	$esc_tesoureiro = 'd-none';
	
}else{
	$esc_tesoureiro = '';
	
}

if($nivel_usu == 'secretario'){
	$esc_secretario = 'd-none';
	
}else{
	$esc_secretario = '';
	
}

$data_atual = date('Y-m-d');
$hora_atual = date('H:i:s');

$mes_atual = Date('m');
$ano_atual = Date('Y');
$data_mes = $ano_atual."-".$mes_atual."-01";
$data_ano = $ano_atual."-01-01";

if(@$_GET['igreja'] > 0){
	@$_SESSION['id_igreja'] = @$_GET['igreja'];
}

$id_igreja = @$_SESSION['id_igreja'];

$res=$this->igrejas;
$nome_igreja = $res[0]['nome'];
$foto_igreja = $res[0]['imagem'];

//TRAZER DADOS DO USUÁRIO LOGADO

$res = $this->getUsuario($id_usuario);
$nome_usu = $res[0]['nome'];
$email_usu = $res[0]['email'];
$senha_usu = $res[0]['senha'];
$cpf_usu = $res[0]['cpf'];
$nivel_usu = $res[0]['nivel'];
$foto_usu = $res[0]['foto'];

//TRAZER DADOS DO CONFIG
$res = $this->getConfig();
$email_igr = $res[0]['email'];
$nome_igr = $res[0]['nome'];
$end_igr = $res[0]['endereco'];
$tel_igr = $res[0]['telefone'];

$pag = @$_GET['pag'];
if($pag == ""){
	$pag = 'home';
}

?>

<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link href="<?=ROTA_GERAL?>/img/logo-icone.ico" rel="shortcut icon" type="image/x-icon">
	<link href="<?=ROTA_CSS?>/style.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?=ROTA?>/sistema/DataTables/datatables.min.css"/>
	<script type="text/javascript" src="<?=ROTA?>/sistema/DataTables/datatables.min.js"></script>

	<link href="<?=ROTA_CSS?>/toastr.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="<?=ROTA_JS?>/toastr.js"></script>

	<title>Painel Administrativo</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?=ROTA_GERAL?>/painel-admin"><img src="<?=ROTA_IGREJA?>/img/igrejas/<?php echo $foto_igreja ?>" width="40px" height="40px"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Pessoas
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="index.php?pag=membros">Membros</a></li>
							<li><a class="dropdown-item <?php echo $esc_tesoureiro ?> <?php echo $esc_secretario ?>" href="index.php?pag=pastores">Pastores (Presbíteros)</a></li>
							<li><a class="dropdown-item <?php echo $esc_tesoureiro ?> <?php echo $esc_secretario ?>" href="index.php?pag=tesoureiros">Tesoureiros</a></li>
							<li><a class="dropdown-item <?php echo $esc_tesoureiro ?> <?php echo $esc_secretario ?>" href="index.php?pag=secretarios">Secretários</a>
							</li>
							<li><a class="dropdown-item  <?php echo $esc_secretario ?>" href="index.php?pag=fornecedores">Fornecedores</a>
							</li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item <?php echo $esc_tesoureiro ?> <?php echo $esc_secretario ?>" href="index.php?pag=usuarios">Usuários</a></li>
							
							
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Cadastros
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

							<li><a class="dropdown-item" href="index.php?pag=tarefas">Agenda / Tarefas</a></li>

							<li><a class="dropdown-item <?php echo $esc_tesoureiro ?> <?php echo $esc_secretario ?>" href="index.php?pag=igrejas">Dados da Igreja</a></li>
							
							<li><a class="dropdown-item <?php echo $esc_tesoureiro ?> <?php echo $esc_secretario ?>" href="index.php?pag=cultos">Cultos</a></li>

							<li><a class="dropdown-item <?php echo $esc_tesoureiro ?> <?php echo $esc_secretario ?>" href="index.php?pag=alertas">Alertas</a></li>

							<li><a class="dropdown-item <?php echo $esc_tesoureiro ?>" href="index.php?pag=eventos">Eventos</a></li>
							
						</ul>
					</li>


					<li class="nav-item dropdown <?php echo $esc_secretario ?>">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Financeiro
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

							<li><a class="dropdown-item" href="index.php?pag=pagar">Contas à Pagar</a></li>

							<li><a class="dropdown-item" href="index.php?pag=receber">Contas à Receber</a></li>
							
							<li><a class="dropdown-item" href="index.php?pag=dizimos">Dízimos</a></li>

							<li><a class="dropdown-item" href="index.php?pag=ofertas">Ofertas</a></li>

							<li><a class="dropdown-item" href="index.php?pag=doacoes">Doações</a></li>

							<li><a class="dropdown-item" href="index.php?pag=vendas">Vendas</a></li>
							
							<li><a class="dropdown-item" href="index.php?pag=movimentacoes">Movimentações</a></li>
							
						</ul>
					</li>


					<li class="nav-item dropdown <?php echo $esc_tesoureiro ?>">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Secretária
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

							<li><a class="dropdown-item" href="index.php?pag=documentos">Documentos</a></li>
														
							<li><a class="dropdown-item" href="index.php?pag=patrimonios">Patrimônio</a></li>

							<li><a class="dropdown-item" href="index.php?pag=celulas">Células</a></li>

							<li><a class="dropdown-item" href="index.php?pag=grupos">Grupos</a></li>

														
						</ul>
					</li>


					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Relatórios
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

							<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalRelMembros">Membros</a></li>
														
							<li><a class="dropdown-item <?php echo $esc_tesoureiro ?>" href="#" data-bs-toggle="modal" data-bs-target="#modalRelPatrimonios">Patrimônio</a></li>

							<li><a class="dropdown-item <?php echo $esc_secretario ?>" href="#" data-bs-toggle="modal" data-bs-target="#modalRelFinanceiro">Financeiros</a></li>
																					
						</ul>
					</li>

					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php?pag=anexos">Anexo Sede</a>
					</li>


					
					
				</ul>
				<div class="d-flex mx-4">
					<img class="img-profile rounded-circle" src="../img/membros/<?php echo $foto_usu ?>" width="40px" height="40px">

					<ul class="navbar-nav ">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<?php echo @$nome_usu ?>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalPerfil">Editar Dados</a></li>

								<?php if($nivel_usu == 'bispo'){ ?>
									<li><a class="dropdown-item" href="../painel-admin">Painel Administrador</a></li>

								<?php } ?>

							
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="../logout.php">Sair</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</nav>