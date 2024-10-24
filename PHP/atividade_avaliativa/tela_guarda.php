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

		$index = 0;
		$list_nomes =[];
		$list_idade =[];
		$list_peso =[];
		$list_altura =[];
		

		$list_nomes[$index] = $_SESSION['nome'];
		$list_idade[$index]	= $_POST['idade'];
		$list_peso[$index]	= $_POST['peso'];
		$list_altura[$index] = $_POST['altura'];
		$index++;
		header("Location: tela_cadastro.php");
		exit();
	?>
</head>
<body>

	

</body>
</html>