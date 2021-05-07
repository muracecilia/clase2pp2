<?php

//include "ejemplo1.php";
//include_once

require "ejemplo1.php";



$miNombre="Tu nombre";
//var_dump($miNombre);

mostrar($miNombre);

$i=0;//1er paso, unica vez
//while($contador<10)//segunda paso, logica
while($i<10)
{
	echo"<br>i :$i";
	/*if($contador==10)
	{
		break;
	}*/
	$i++;//3er paso, cambio de la condicion, para salirs
	//echo"<br>contador :$contador";
}


for ($i=0;$i<10;$i++)
{
	echo"<br>i for :$i";
}

//echo "hasta aca llegue";
/*$i=0;

for (;;){
	
	if($i==10)
	{
		break;
	}
	$i++;
	echo$i;
}
*/
?>