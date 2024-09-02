<?php 

	$num1=5;
	$num2=15;
	$resp=0;
	$oper=0;

	echo "</br>Digite seu primeiro valor: $num1</br>";

	echo "</br>Digite seu segundo valor: $num2</br>";

	menu();
	
	switch($oper){
		case '1':
			$resp=somar($num1,$num2);
			echo "</br>Os numeros escolhidos foram: $num1 e $num2</br>
			</br>A orperação escolhida foi : Soma</br>
			</br>O resultado da operação foi : $resp</br>";
			break;

		case '2':
			$resp=subtrair($num1,$num2);
			echo "</br>Os numeros escolhidos foram: $num1 e $num2</br>
			</br>A orperação escolhida foi : Subtração</br>
			</br>O resultado da operação foi : $resp</br>";
			break;

		case '3':
			$resp=multiplicar($num1,$num2);
			echo "</br>Os numeros escolhidos foram: $num1 e $num2</br>
			</br>A orperação escolhida foi : Multiplicação</br>
			</br>O resultado da operação foi : $resp</br>";
			break;

		case '4':
			$resp=dividir($num1,$num2);
			echo "</br>Os numeros escolhidos foram: $num1 e $num2</br>
			</br>A orperação escolhida foi : Divisão</br>
			</br>O resultado da operação foi : $resp</br>";
			break;

		default:
			echo "</br>Digite um valor válido</br>";
			break;
	}











	function menu (){

		echo "</br> Escolha uma orperação: </br>";
		echo "</br> 1- Soma </br>";
		echo "</br> 2- Subtração </br>";
		echo "</br> 3- Multiplicação </br>";
		echo "</br> 4- Divisão </br>";}


	function somar ($num1,$num2){
		return($num1+$num2);		
	}

	function subtrair ($num1,$num2){
		return($num1-$num2);		
	}

	function multiplicar ($num1,$num2){
		return($num1*$num2);		
	}

	function dividir ($num1,$num2){
		return($num1/$num2);		
	}


	function operacao(){
		return $oper=0;
	}

 ?>