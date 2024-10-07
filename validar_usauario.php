<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar usuário</title>
</head>
<body>
	<h1>Validar usuário</h1>
	<form action="recebe_usuario.php" method="post">
		<label for="email">Email: </label>
		<input type="email" name="email" id="email" autofocus required maxlength="100">

		<br><br>

		<label for="senha">Senha: </label>
		<input type="password" name="senha" id="senha" required maxlength="12">
		<br><br>
		<input type="submit" name="enviar" id="enviar">
		<input type="reset" name="limpar" id="limpar">

		

	</form>

</body>
</html>