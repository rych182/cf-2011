<?php

	$archivo=fopen("archivo.txt", "r") or die("Hubo un problema ");

	while (!feof($archivo))/*Mientras el archivo no
	 llegue al final del archivo de texto,
	 me vas a leer lo que se encuentre dentro de el*/ {
		
		$traer = fgets($archivo);//fget trae todo los datos de ese archivo dentro de la variable
		$saltodelinea = nl2br($traer);//Lee los saltos del linea del tutorial anterior
		echo $saltodelinea;
	}

?>