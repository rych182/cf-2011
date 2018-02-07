<?php
include ('conexion1.php');
	if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['user']) && !empty($_POST['user']) &&
		isset($_POST['pw']) && !empty($_POST['pw']) &&
		isset($_POST['pw2']) && !empty($_POST['pw2']) &&
		isset($_POST['email']) && !empty($_POST['email']) &&
		($_POST['pw']) == ($_POST['pw2'])
		) {
		$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar al server");

		mysql_select_db($db,$con)or die("Problemas al conectar la base de datos");

		mysql_query("INSERT INTO registro (nombre,user,pw,email) VALUES ('$_POST[nombre]','$_POST[user]','$_POST[pw]','$_POST[email]')",$con);
		echo "Datos insertados<br>";
		echo "Nombre: ".$_POST['nombre']."<br>";
		echo "User: ".$_POST['user']."<br>";
		echo "Password: ".$_POST['pw']."<br>";
		echo "Email: ".$_POST['email']."<br>";
		echo "<a href='http://ricgc.com/php/index.html'>Regresar a la lista.</a>";
	}else{
		echo "Verifica si llenaste los campos o si los password coinciden<br> <a href='http://ricgc.com/php/index.html'>Regresar a la lista.</a>";
	}

?>