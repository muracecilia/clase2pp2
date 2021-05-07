<?php


$fin=8;
echo "CENTRO NUMERICO <br>";
echo "El programa calcula los centros numericos entre 1 y $fin <br>";

for($todosN=1;$todosN<=$fin;$todosN++){                   //Recorro todas los numeros desde el 1 hasta lo que diga $fin
	
	$suma1=0;                                                   //Acumula el 1er grupo de numeros
	$suma2=0;                                                   //Acumula el 2do grupo de numeros

	for($grupo1=1;$grupo1<=$todosN;$grupo1++) {               //Recorro ascendentemente todos los numeros hasta lo que diga 
		                                                        //$todosN
		$suma1+=$grupo1;                                        //Acumulo en $suma1 el valor de la variable $grupo1 
	}

	for($grupo2=$fin;$grupo2>=$todosN+2;$grupo2--) {          //Recorro descendentemente todos los numeros desde el $fin hasta 
		                                                        //lo que diga recorrer
		$suma2+=$grupo2;                                        //Acumulo en $suma2 el valor de la variable $grupo2
	}

	if($suma1==$suma2) {                                        //Si el contenido de $suma1 y $suma2 es igual, el centro numerico
		echo "El centro numerico es: " . ($todosN+1);
		break;                                                  //Rompo el ciclo de $todosN para no seguir avanzando
	} else {
		//if($suma1>$suma2 || $todosN==$fin-1 || $fin==1) {     //Sino pregunto si existe alguna de estas posibilidades para no 
			//echo "No existe centro numerico ....";              //seguir avanzado. 
			break;                                              //Rompo el ciclo de $recorrer para no seguir avanzando.
		//}
	}
}

?>