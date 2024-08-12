<?php 

	print "Usando print para exibir na tela <br />";

	$data = "20 de agosto de 2024";
	$salario = 850.00;
	$cargo = "Estagiário";

	echo "Arquivo criado em $data <br />";
	printf("Salário minino: R$ %.2f <br />", $salario);

	$texto = sprintf("%s recebe R$ %.2f pro mês ",$cargo, $salario*2);

	echo $texto;



 ?>