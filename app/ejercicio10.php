<?php
//10 de un numero ingresado, mostrar todos los numero primos hasta el 0 (cero) 
	
$numero=15;	

for($todos=0;$todos<=$numero;$todos++)
{
	$numeroIngresado=$todos;

	for($numeroAnterior=2;$numeroAnterior<$numeroIngresado;$numeroAnterior++)
	{
		if($numeroIngresado%$numeroAnterior==0)
		{
			break;
			//echo "<br> nro: $numeroAnterior";
			//si entra aca no es primo
		}
	}

	if($numeroAnterior<$numeroIngresado )
	{
		//echo "$numeroIngresado  no es primo";
	}else
	{
	echo "$numeroIngresado  ES primo <br>";
	}
	//echo "<br>";

}

?>
