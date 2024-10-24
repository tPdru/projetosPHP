<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<?php 
		date_default_timezone_set("America/Sao_Paulo");

		session_start();

		$_SESSION['nome'] = $_POST['nome'];
		$_SESSION['idade'] = $_POST['idade'];
		$_SESSION['peso'] = $_POST['peso'];
		$_SESSION['altura'] = $_POST['altura'];



	?>
</head>
<body>

	<b>Funcionário: </b> <?php echo $_SESSION["nome"]; ?>, logado com sucesso.<br>

</body>
</html>