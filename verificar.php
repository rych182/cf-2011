<?php

	session_start();
	include("conexion1.php");
	if (isset($_POST['user']) && !empty($_POST['user']) &&
		isset($_POST['pw']) && !empty($_POST['pw']) ) {
		
		$con=mysql_connect($host,$user,$pw)or die("Problemas con el servidor");
		mysql_select_db($db,$con)or die("problemas con Base de datos");

		$sel=mysql_query("SELECT user,pw FROM registro WHERE user='$_POST[user]'",$con);

		$sesion=mysql_fetch_array($sel);

		if ($_POST['pw'] == $sesion['pw']) {
			//vairable super global $_SESSION['username'], nos permite guardar en ella el nombre de usuario al iniciar sesión, si es correcto
			$_SESSION['username'] = $_POST['user'];
			echo "Sesion exitosa";
		}else{
			echo "combinacion erronea";
		}
	}else{
		echo "Debes llenar ambos campos";
	}

?>