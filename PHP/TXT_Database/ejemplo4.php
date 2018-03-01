<?php
	$respuestas[0] = "caballo";
	$respuestas[1] = "perro";
	$respuestas[2] = "gato";
	$respuestas[3] = "pez";
	$archivo = fopen("respuestas.txt", "a"); 	
	for($i = 0; $i < 4; $i++){
		fwrite($archivo, $respuestas[$i]);
		fwrite($archivo, ",");
	}	
	fwrite($archivo, "\n");
	fclose($archivo)

?>
