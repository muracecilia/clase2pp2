<?php
//11-calcular si un número es centro numérico (Un centro numérico es un número que separa una lista de números enteros (comenzando en 1) en dos grupos de números, cuyas sumas son iguales. El primer centro numérico es el 6, el cual separa la lista (1 a 8) en los grupos: (1, 2, 3, 4, 5) y (7, 8) cuyas sumas son ambas iguales a 15. El segundo centro numérico es el 35, el cual separa la lista (1 a 49) en los grupos: (1 a 34) y (36 a 49) cuyas sumas son ambas iguales a 595)

$fin=49;
echo "CENTRO NUMERICO <br><br>";
echo "Numero Elegido $fin <br>";

$todosN=1;
while ( $todosN<=$fin) {
	$suma1=0;                                                   
	$suma2=0;   

	$grupo1=1;
	while($grupo1<=$todosN){
		$suma1+=$grupo1;
		$grupo1++;
	}
	
	$grupo2=$fin;
	while($grupo2>=$todosN+2){
		$suma2+=$grupo2;
		$grupo2--;
	}
	
	if($suma1==$suma2) {                                   
		echo "<br>El centro numerico del numero elegido es: " . ($todosN+1);
		break;                                                  
	} else {
		if($suma1>$suma2 || $todosN==$fin-1 || $fin==1) {     
			echo "No existe centro numerico ....";              
			break;                                              
		}
	}

	$todosN++;
}

?>