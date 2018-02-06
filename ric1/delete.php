<?php

	include("conexion.php");
	//Problemas con la coneccion
	$con=mysql_connect($host,$user,$pw)or die("Problemas con el servidor");
	//Problemas con la base de datos
	mysql_select_db($db,$con)or die("Problemas con la base de datos");

	//Hacer una consulta
	$reg=mysql_query("SELECT ID FROM lol1 WHERE nombre= '$_POST[nombre]'",$con);
	//mysql_fetch_array nos permite traer los datos de la base de datos desde una tabla de manera organizada
	
	if ($re=mysql_fetch_array($reg)) {//realiza la consulta, que es lo que eliminara posteriormente
		mysql_query("DELETE FROM lol1 WHERE nombre = '$_POST[nombre]'",$con);
		echo "Datos eliminados<br>"."<a href='http://ricgc.com/php/index.html'>Regresa a la lista</a>";
	}else{
		echo "Los datos NO se eliminaron<br><a href='http://ricgc.com/php/index.html'>Regresa a la lista</a>";
	}
?>