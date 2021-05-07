<?php
	//Funcion sumar, dividir, retornar si es 0, calcular, mostrar resultado.


	//Funcion sumar
	//Suma: numero1 y numero2
	function sumar($numero1, $numero2){
		return $numero1+$numero2;
	}

	//Funcion retornar si es 0
	//true o false
	//retornar si es 0 recibe el numero ingresado
	//retornar no retorna cuado es cero. retornar si es cero, si retorna true no puedo dividir, de lo contrario hago la division y retorna el resultado. "infinito".

	function retornarsiescero($numero2){
		if($numero2==0){
			$retornar=true;
		}else{
			$retornar=false;
		}
		return $retornar;
	}
	//Funcion dividir
	//Division: numero1 y numero2
	function dividir($numero1, $numero2){
		if(retornarsiescero($numero2)==true){
			$retornar=" ---- INFINITO----";
		}else{
			$retornar=$numero1/$numero2;
		}

		return $retornar;
	}
	
	//Funcion mostrar resultado
	// funcion mostrar resultado, recibe resultado ingresado como parametro.
	function mostrarresultado($resultadoparametro){
		return $resultadoparametro;
	}
	
	//Funcion calcular
	//funcion Calcular: suma numero1 y numero2 / division numero1 y numero2
	//calcular recibe numero1, operador, numero2
	function calcular($numero1, $operador, $numero2){
		switch ($operador) {
			case '+':
				echo "El resultado de la suma es:".mostrarresultado(sumar($numero1,$numero2));
				break;
			case '/':
				echo "El resultado de la suma es:".mostrarresultado(dividir($numero1,$numero2));
				break;
			default:
				echo "Opcion no valida....";
				break;
		}
	}
	echo "Calculadora <br><br>";
	$numero1=2;
	$numero2=0;
	$operador="/";

	echo "Numero1: $numero1  <br>";
	echo "Numero2: $numero2  <br>";
	echo "Operador: $operador  <br><br>";
	calcular($numero1,$operador,$numero2);
?>