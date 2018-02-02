<?php

	$filename = $_POST['archivo'];
	//unlink borrar archivos de texto, borra, .txt, .html, php etc
	unlink($filename);
	echo "El archivo ha sido elimina con éxito"."<br>";
?>