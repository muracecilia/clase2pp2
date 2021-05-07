<?php
	//8- De un numero ingresado positivo (de lo contrario informar que no se puede) mostrar todos los números desde el ingresado hasta el 0(cero). 
	$valor=rand(-1000,1000);

	echo "El numero es: $valor <br>";

	if ($valor< 0) 
	{
		echo "Ingrese un numero Positivo <br>";
	}
	else
	{
		while($valor>=0)
		{
			echo"<br>$valor";
	
			$valor--;
		}
		
	}

?>