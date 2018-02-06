<?php
//Include nos permite escribir otros scripts dentro del actual
include("conexion.php");
//Para que no haya campos vacíos
	if (isset($_POST['nombre']) && !empty($_POST['nombre'])
		&& isset($_POST['password']) && !empty($_POST['password']) )
	{
		//Conectar con el servidor
		//mysql_connect nos sirve para conectar con el servidor
		$con=mysql_connect($host,$user,$pw)or die("Problemas al conectar");
		//Desconectar a la base de datos
		//mysql_select_db nos sirve para seleccionar bases de datos
		mysql_select_db($db,$con)or die("Problemas al conectar la base de datos");
		//mysql_query Nos sirve para realizar consultas
		mysql_query("INSERT INTO lol1(nombre,password) VALUES('$_POST[nombre]','$_POST[password]')",$con);
		echo "Datos insertados<br><a href='http://ricgc.com/php/index.html'>Regresar a la lista</a>";
	}	else{
		echo "Problemas al insertar datos";
	}
?>