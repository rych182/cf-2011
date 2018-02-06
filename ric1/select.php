<?php
	
	include("conexion.php");

	$con=mysql_connect($host,$user,$pw)or die("Problemas para conectar el server");

	mysql_select_db($db,$con)or die ("Problemas para conectar la base de datos");

	//conectar la consulta de selección para selecciónar los registros
	$registro=mysql_query("SELECT * FROM lol1 WHERE nombre='$_POST[nombre]'")or die("Problemas en la consulta:".mysql_error());

	//Nos va a agarrar los datos de 1 en 1 hasta que no exista ningúno.
	//mysql_fetch_array nos ayuda a traer los datos de forma ordenada, de lista, en forma de tabla.


	while ($reg=mysql_fetch_array($registro)) {
		echo $reg['nombre']."<br>";
		echo $reg['password']."<br>";
		echo "<a href='http://ricgc.com/php/index.html'>Regresa a la lista</a>";
	}
?>