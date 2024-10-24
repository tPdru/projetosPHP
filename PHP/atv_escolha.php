<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Escolha</title>
</head>
<body>
	<h1>Escolha um filme do nosso catálogo</h1>

	<form action="rsp_escolha.php" method="get">
		
		<label for="filme1"><h4>1 - Todo mundo em pânico 1 </label>
		<br>
		
		<label for="filme2"><h4>2 - Todo mundo em pânico  2 </label>
		<br>
		
		<label for="filme3"><h4>3 - Todo mundo em pânico  3 </label>
		<br>
		
		<label for="filme4"><h4>4 - Todo mundo em pânico  4 </label>
		<br>
		
		<label for="filme5"><h4>5 - Todo mundo em pânico  5 </label>
		<br><br>

		<input type="number" name="escolha" id="escolha">

		<input type="submit" name="enviar" id="enviar">
		<input type="reset" name="limpar" id="limpar">

	</form>

</body>
</html>