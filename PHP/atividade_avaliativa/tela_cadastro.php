<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadástro</title>
</head>
<body>
	<?php session_start();
		$index = 0;
		//$index = $_SESSION['atualIndex'];

		
		$_SESSION['index'] = $index;
	 ?>

	<form name="cadastrar" method="post" action="tela_guarda.php">

		Nome: <input type="text" name="nome"> <br><br>

		Idade: <input type="text" name="idade"> <br><br>

		Peso: <input type="text" name="peso"> <br><br>

		Altura: <input type="text" name="altura"> <br><br>



		<input type="submit" name="enviar" value="Cadastrar" >

		<input type="submit" name="comparar" value="Comparar" >		
	</form>




</body>
</html>