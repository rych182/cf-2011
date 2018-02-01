<?php

$operacion = $_POST['lista'];

//isset quiere decir "si existe"
//!empty significa "no esta vacio"
if (isset($_POST['c1']) && !empty($_POST['c1']) && isset($_POST['c2']) && !empty($_POST['c2']) ) {
	
echo "El resultado es: ";

switch($operacion){
	case 'suma':
	echo $_POST['c1'] + $_POST['c2'];
	break;

	case 'resta':
	echo $_POST['c1'] - $_POST['c2'];
	break;

	case 'multiplicacion':
	echo $_POST['c1'] * $_POST['c2'];
	break;

	case 'division':
	echo $_POST['c1'] / $_POST['c2'];
	break;
}


}else{
	echo "Debes insertar todos los campos";
}
?>