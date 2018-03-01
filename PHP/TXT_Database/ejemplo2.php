<?php
	$file = "ejemplo.txt";
	$archivo = fopen($file, "a");
	fwrite($archivo, "que pedal \n");
	fclose($archivo);
?>
