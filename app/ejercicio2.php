<?php

	$precio=rand(1,100);
	$iva=$precio*0.21;

	$total=$precio+$iva;

	echo "Precio es: ".$precio."<br>";
	echo "El iva es: ".$iva."<br>";
	echo "El total es:".$total;

?>
