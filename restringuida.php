<?php

	//Sirve para trabajar mediante sesiones session_start();
	session_start();

	if (isset($_SESSION['username'])) {
		echo "Puedes ver este sitio web porque estás registrado";
		echo "<br><a href=destruir.php> Cerrar sesión</a>";
	}else{
		echo "No puedes ver esta página porque no estás registrado, registrate";
	}

?>