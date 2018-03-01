<?php
	$file = "respuestas.txt";
	$lines = file($file);
	$respuesta = explode(",", $lines[1]);
	for ($i=0; $i<4; $i++){
		echo $respuesta[$i];
		echo "\n";
	}
?>
