<?php   
    
	$numero1=rand(1,100);
	$numero2=rand(1,100);
	$numero3=rand(1,100);

	echo "El primer numero es: ". $numero1 . "<br>";
	echo "El segundo numero es: ". $numero2 . "<br>";
	echo "El tercer numero es: ". $numero3 . "<br><br>";
	
	if($numero1>$numero2 && $numero1>$numero3){
		echo "El mayor es: ".$numero1."<br>";
	}elseif ($numero2>$numero3) {
		echo "El mayor es: ".$numero2."<br>";
	}else{
		echo "El mayor es: ".$numero3."<br>";
	}

?>