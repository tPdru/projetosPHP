<?php 
	$ent1=3;
	$ent2=15;
	$ent3=45;
	$nome="Kleide";
	$sexo="f";
	$idade=5;








	atividaeUm(somar($ent1, $ent2));

	atividadeDois($ent1);

	atividadeTres ($nome, $sexo, $idade);

	atividadeQuatro($ent1,$ent2,$ent3);




	function somar($num1, $num2){
		return ($num1 + $num2);
	}

	function atividaeUm($num1){
		if($num1 >20){
			$num1+= 8;
			echo "</br>O resultado da operação é: $num1</br>" ;
		}
		else{
			$num1-= 5;
			echo "</br>O resultado da operação é: $num1</br>" ;
		}
	}


	function atividadeDois ($ent1, ){
		if ($ent1%10 == 0 || $ent1%5 == 0 ||$ent1%2 == 0 ) {
			echo "</br>Seu número é divisivel por 10, 5 ou 2.</br>";
		}
		else{
			echo "</br>Seu número não é divisivel por 10, 5 e nem 2.</br>";
		}
	}


	function atividadeTres($nome, $sexo, $idade){
		if($sexo=="F" &&  $idade<25 || $sexo=="f" &&  $idade<25){
			echo"</br> $nome -> ACEITA</br>";
		}
		else{
			echo"</br> $nome -> NÃO ACEITA</br>";
		}
	}

	function atividadeQuatro($ent1,$ent2,$ent3){
		$cont = 0;
		$temp = 0;

		while ($cont == 0) {
			if($ent1 < $ent2){
				if($ent1 < $ent3){
					if($ent2 < $ent3){
						echo"</br> $ent1 $ent2 $ent3 </br>";
						$cont = 1;
					}
					else{
						$temp = $ent2;
						$ent2 = $ent3;
						$ent3 = $temp;
					}
				}
				else{
					$temp = $ent1;
					$ent1 = $ent3;
					$ent3 = $temp;
				}
			}
			else{
				$temp = $ent1;
				$ent1 = $ent2;
				$ent2 = $temp;
			}
		}
	}

	function atividadeCinco(){

	}

 ?>