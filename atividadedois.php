<?php 
	$salario=7000;
	$salliqui=0.0;

	if ($salario>=150 && $salario<=1500) {
		$salliqui= $salario - ($salario*0.1) ;
		echo"- Salário bruto -> R$ $salario </br>";
		echo"- Porcentagem do desconto -> 10% </br>:";
		echo"- Salário Líquido -> $salliqui";
	}
	elseif ($salario>=1501.00 && $salario<=1600) {
		$salliqui= $salario - ($salario*0.15) ;
		echo"- Salário bruto -> R$ $salario </br>";
		echo"- Porcentagem do desconto -> 15% </br>:";
		echo"- Salário Líquido -> $salliqui";
	}
	
	elseif ($salario>=1601.00 && $salario<=1800.00) {
		$salliqui= $salario - ($salario*0.2) ;
		echo"- Salário bruto -> R$ $salario </br>";
		echo"- Porcentagem do desconto -> 20% </br>:";
		echo"- Salário Líquido -> $salliqui";
	}

	elseif ($salario>=1801.00 && $salario<=2500.00) {
		$salliqui= $salario - ($salario*0.275) ;
		echo"- Salário bruto -> R$ $salario </br>";
		echo"- Porcentagem do desconto -> 27,5% </br>:";
		echo"- Salário Líquido -> $salliqui";
	}
	else{
		echo"Isento de impostos";
	}

 ?>