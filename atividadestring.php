<?php 
	$texto = "micro computador";

	$tamanho = strlen($texto);

	echo "<br/>". $texto. "possui". $tamanho. "caracteres";

	echo "<br/>". strtoupper($texto);

	echo "<br/>". strtolower($texto);

	echo "<br/>". ucfirst($texto);

	echo "<br/>". ucwords($texto); 


	echo "<br/>". substr($texto, 13, 3);

	echo "<br/>". str_replace("micro", "Nano", $texto);


	echo "<br/>------------------------------------------------------------- <br/>";


	$dataAtual = date("d/m/y");

	echo "<br/> Hoje é: ". $dataAtual."<br/>";

	$hora = date("h:i:s");

	echo "<br/>Agora são: " . $hora. "<br/>";

	$dataHora = date("d/m/y h:i:s");

	echo "<br/>Data e Hora: ". $dataHora."<br/>";

	if($dataAtual == "25/12/2024"){
		echo "foi";
	}else{
		echo "Não foi";
	}

 ?>