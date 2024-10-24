<?php 
	$escolha = $_GET['escolha'];

	switch ($escolha) {
		case '1':
			echo "Seu filme favorito é : Todo mundo em pânico 1";
			break;

		case '2':
			echo "Seu filme favorito é : Todo mundo em pânico 2";
			break;
		

		case '3':
			echo "Seu filme favorito é : Todo mundo em pânico 3";
			break;
		

		case '4':
			echo "Seu filme favorito é : Todo mundo em pânico 4";
			break;
		

		case '5':
			echo "Seu filme favorito é : Todo mundo em pânico 5";
			break;
		

		
		default:
			echo "Escolha um filme do nosso catálogo";
			break;
	}

 ?>