
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link href="<?=ROTA_GERAL?>/view/img/logo-icone.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?=ROTA_GERAL?>/view/css/login.css">

	<title><?php echo "Igreja Batista" ?></title>
</head>
<body>

	<div class="login">
	<img src="<?=ROTA_GERAL?>/view/img/logo.png" width="100%" class="mb-4">
    <form method="post" action="<?=ROTA_GERAL?>/login/auth">
    	<input type="text" name="usuario" id="cpf" placeholder="CPF" value="000.000.000-00" required="required" />
        <input type="password" name="senha" placeholder="Insira sua Senha" value="123" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Logar</button>
    </form>
</div>

</body>
</html>