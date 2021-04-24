<?php
	$op=rand(1,3);
	echo "<br> Elija destino --> 1 - Bariloche/2 - Ushuaia /3 - Cataratas <br><br>";
	echo "Su opcion elegida es: $op";


	switch ($op) {
		case 1:
		case 2:
			echo "<br> Hace frio ... ";
			break;
		case 3:
			echo "<br> Hace calor ... ";
			break;
	}
?>