<?php 
	$resp = 3;
	$escolha;

	echo "Escolha: </br>";
	echo "1 - Banana </br>";
	echo "2 - Laranja </br>";
	echo "3 - Abacaxi </br>";
	echo "4 - Sair  </br>";




	switch ($resp) {
		case 1:
			$escolha = "Banana";
			break;
		case 2:
			$escolha = "Laranja";
			break;
		case 3:
			$escolha = "Abacaxi";
			break;
		case 4:
			$escolha = "Sair";
			break;
		
		default:
			echo "</br>Digite um valor válido (╬▔皿▔)╯";
			$escolha = "";
			break;
	}

	echo"</br>";
	if ($resp >0 && $resp<5) {
		echo "Você escolheu $escolha !!"; 
	}

	


 ?>