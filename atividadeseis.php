<?php 

	// criando um função
	function soma(){
		echo "Somando...";
		$num1 = 10;
		$num2 = 20;
		$resp = $num1 + $num2;
		echo $resp . "<br />"; 
	}

	function somar($num1,$num2){

		$resp = $num1 + $num2;
		echo $resp ; 
	}

	function somarVal($num1,$num2){

		return ($num1 + $num2);
		
	}

	//executando uma função
	
	soma();
	echo "<br />somar valores " . somarVal(50,60);
	

 ?>