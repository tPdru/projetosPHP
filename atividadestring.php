<?php 
	$texto = "micro computador";

	$tamanho = strlen($texto);

	echo "<br/>". $texto. "possui". $tamanho. " caracteres";

	echo "<br/>". strtoupper($texto);

	echo "<br/>". strtolower($texto);

	echo "<br/>". ucfirst($texto);

	echo "<br/>". ucwords($texto); 


	echo "<br/>". substr($texto, 13, 3);

	echo "<br/>". str_replace("micro", "Nano", $texto);


	echo "<br/>------------------------------------------------------------- <br/>";

	date_default_timezone_set('UTC');

	$dataAtual = date("d/m/Y");

	echo "<br/> Hoje é: ". $dataAtual."<br/>";

	$hora = date ("H:i:s");

	echo "<br/>Agora são: " . $hora. "<br/>";

	$dataHora = date("d/m/Y h:i:s");

	echo "<br/>Data e Hora: ". $dataHora."<br/>";

	if($dataAtual == "01/10/2024"){
		echo "foi";
	}else{
		echo "Não foi";
	}

 ?>