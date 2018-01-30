<?php
//Array predefinido
	$nombres = array("Juanito","perengano");
	foreach ($nombres as $akas) {
		echo $akas."<br>";
	}

//Array personalizado o asociado
$apellidos = array('uno' => 'Garrido','dos' => 'Cruz', 'tres' => 'Macin' );
	foreach ($apellidos as $numero => $apeido) {
		echo $numero." = ".$apeido."<br><br>";
	}


?>