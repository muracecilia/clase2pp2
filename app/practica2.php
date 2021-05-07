<?php

$numeroIngresado=3;

for($numeroAnterior=2;$numeroAnterior<$numeroIngresado;$numeroAnterior++)
{
	/*if($numeroAnterior%2==0)
	{
		echo "<br> nro: $numeroAnterior es par";
	}*/

	if($numeroIngresado%$numeroAnterior==0)
	{
		break;
		//echo "<br> nro: $numeroAnterior";
		//si entra aca no es primo
	}
	
}
if($numeroAnterior<$numeroIngresado)
{
	echo "$numeroIngresado no es primo";
}
else
{
	echo "$numeroIngresado es primo";
}


?>