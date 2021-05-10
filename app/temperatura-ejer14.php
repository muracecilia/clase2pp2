<?php
//funcion: de selcius farengein- farengein a selcius-  mostrar temperatura-  transformar
//parametro: 1ra funcion recibe un parametro y retorna un valor
//2da funcion recibe un parametro retorna valor.
// recibe la temperatura
// recibe como primer parametro una temperatura, y como segundo parametro, a que lo quiero transformar. (f -c - o lala lala)

function celsiusAFahrenheit($temperatura){
	return (1.8*$temperatura)/32; 
}

function fahrenheitACelsius($temperatura){
	return ($temperatura-32)/1.8; 
}



function transformar ($temperatura, $opcion)
{
	switch ($opcion) {
		case 'C':
			$resultado=celsiusAFahrenheit($temperatura);
			break;
		case 'F':
			$resultado=fahrenheitACelsius($temperatura);
			break;
		default:
			$resultado="La opcion es incorrecta";
			break;
	}

	mostrarTemperatura($temperatura, $resultado, $opcion);

}

function mostrarTemperatura($temOriginal, $temperatura , $opcion){
	if($temperatura=="entrada no valida"){

		echo "ERROR OPERACION NO VALIDA";
	}
	else
	{
		echo "<h2> CONVERSION </h2>";
		echo "La temperatura Origina es: $temOriginal<br>";
		if($temperatura=="La opcion es incorrecta"){
			echo "Error, opcion incorrecta";
		}else{
			echo "El resultado de tranformacion es: $temperatura º $opcion";
		}
		

		echo "<h4> Nombre de la empresa </h4>";
	}


}

//

transformar(10, "C");//Ejemplo 1
 
transformar(10, "F");//Ejemplo 2
 
transformar(10, "LA LA LA...");// Ejemplo 3


?>