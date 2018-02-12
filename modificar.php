<?php

	include("conexion.php");

	$con=mysql_connect($host,$user,$pw)or die("Problemas en server");

	mysql_select_db($db,$con)or die("Problemas con la Base de datos");

	//UPDATE= actualizar, set = campo
	mysql_query("UPDATE codigof set nombre='$_POST[nuevo]' WHERE nombre='$_POST[viejo]'",$con)or die(mysql_error());

	echo "Actualización correcta";
?>