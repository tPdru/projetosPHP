<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<?php 
		date_default_timezone_set("America/Sao_Paulo");
		session_start();

		


		$id = $_SESSION['index'] ;
		
		$idnome = "nome$id";
		$ididade = "idade$id";
		$idpeso = "peso$id";
		$idaltura = "altura$id";
		$_SESSION['comparar'] =$_POST['comparar'];
		$_SESSION[$idnome] = $_POST['nome'];
		$_SESSION[$ididade] = $_POST['idade'];
		$_SESSION[$idpeso] = $_POST['peso'];
		$_SESSION[$idaltura] = $_POST['altura'];

		

		$comp = $_SESSION['comparar'];

		
		

		if($comp != null){
			header("Location: tela_resposta.php");
			exit();
		}
		else{
			$_SESSION['index'] = $_SESSION['index'] +1;

			header("Location: tela_cadastro_dois.php");
			exit();
		}
		
		
	?>
</head>
<body>

	

</body>
</html>