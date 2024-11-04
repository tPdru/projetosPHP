<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<?php 
		date_default_timezone_set("America/Sao_Paulo");
		session_start();

		


		$id = $_SESSION['atualIndex'] += 1;
		
		$testen = "nome$id";
		$_SESSION['comparar'] =$_POST['comparar'];
		$_SESSION[$id] = $_POST['nome'];
		$_SESSION['idade'] = $_POST['idade'];
		$_SESSION['peso'] = $_POST['peso'];
		$_SESSION['altura'] = $_POST['altura'];

		

		$comp = $_SESSION['comparar'];

		
		

		if($comp != null){
			echo "GD";
		}
		else{
			
			header("Location: tela_cadastro.php");
			exit();
		}
		
		
	?>
</head>
<body>

	

</body>
</html>