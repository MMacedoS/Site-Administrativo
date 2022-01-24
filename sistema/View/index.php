<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link href="<?=ROTA_GERAL?>/img/demaislogos/logo-igreja-vinho.png" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?=ROTA_GERAL?>/css/login.css">

	<title><?= @$nome_igreja_sistema ?></title>
</head>
<body>

	<div class="login">
	<img src="<?=ROTA_GERAL?>/img/demaislogos/logo-igreja-vinho.png" width="50%" style="margin: 0 77px 0 77px;" class="mb-4">
	
    <form method="post" action="<?=ROTA_GERAL?>/Login/autenticar">
    	<input type="text" name="usuario" placeholder="Email ou CPF" required="required" />
        <input type="password" name="senha" placeholder="Insira sua Senha" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Logar</button>
    </form>
</div>

</body>
</html>