
<?php
	
	$n1 = rand(1,100);
	$n2 = rand(1,100);
	$n3 = rand(1,100);

	echo " Los numeros son: " .$n1 . " - ".$n2 . " - ".$n3 . " <br> <br> ";
	

	if ($n1!=$n2 && $n1!=$n3 && $n2!=$n3) 
	{

		if(($n1 > $n2 && $n1 < $n3) || ($n1 < $n2 && $n1 > $n3)) 	
		{
			$nMedio=$n1;
		} 
		else 
		{
			if (($n2 > $n1 && $n2 < $n3) || ($n2 < $n1 &&  $n2 > $n3)) 
			{
				$nMedio=$n2;
			} 
			else 	
			{
                $nMedio=$n3;					
			}
		}
		$nMedio;
		echo "El Numero del Medio es : " .$nMedio;
	}
	else 
	{
		echo "No tiene Medio";
	}

?>
