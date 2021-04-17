<?php   
    
	$mes=rand(1,12);
	echo "El mes es: ".$mes . "<br>";

	if($mes>=4 && $mes<=6){
		echo "Estamos en Otoño";
	}elseif($mes>=7 && $mes<=9){
		echo "Estamos en Invierno";
	}elseif($mes>=10 && $mes<=12){
		echo "Estamo en Primavera";
	}else{
		echo "Estamos en Verano";
	}

?>