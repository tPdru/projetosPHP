<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php 
		session_start();
		$idnome = "nome$id";
		$ididade = "idade$id";
		$idpeso = "peso$id";
		$idaltura = "altura$id";

		for($i=0; i<=$_SESSION['index']; $i++){
			$idnome = "nome$i";
			$ididade = "idade$i";
			$idpeso = "peso$i";
			$idaltura = "altura$i";

			$lista_nome[$i] = $_SESSION[$idnome];
			$lista_idade[$i] = $_SESSION[$ididade];
			$lista_peso[$i] = $_SESSION[$idpeso];
			$lista_altura[$i] = $_SESSION[$idaltura];

		}

		echo "$lista_nome[maior($lista_idade)] è a pessoa mais velha com $lista_idade[maior($lista_idade)]";






		function maior($lista_atual){
			$c = 1;
			$indice = 0;
			for ($i=0; $i < count($lista_atual); $i++) { 
				
				if($c < count($lista_atual)){
					if($lista_atual[$i] > $lista_atual[$c]){
						$indice = $i;
					}
					else{
						$indice = $c;
					}
					$c++;
				}
					
			}	
			retun $indice;		
		}



		

		

	 ?>

</body>
</html>