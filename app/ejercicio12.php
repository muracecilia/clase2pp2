<?php
//12 – Mostrar los primeros 4 centros numéricos 

//MURA CECILIA

$fin=1;
$contar=0;
echo "CENTRO NUMERICO <br><br>";

while($contar<4){
	$todosN=1;
	while ( $todosN<=$fin) {
		$suma1=0;                                                   
		$suma2=0;   

		$grupo1=1;
		while($grupo1<=$todosN){
			$suma1+=$grupo1;
			$grupo1++;
		}
		
		$grupo2=$fin;
		while($grupo2>=$todosN+2){
			$suma2+=$grupo2;
			$grupo2--;
		}
		
		if($suma1==$suma2) {                                   
			echo "<br>El centro numerico entre 1 y $fin es: " . ($todosN+1);
			$encontro=1;
			break;                                                  
		} else {
			if($suma1>$suma2 || $todosN==$fin-1 || $fin==1) {     
				
				$encontro=0;              
				break;                                              
			}
		}

		$todosN++;
	}
	$fin++;
	if($encontro==1){
		$contar++;
	}
}


?>