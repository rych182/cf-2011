<?php

//Copiar archivos
//fuente del archo- 
//$_FILES['foto'] es una variable super global
//tmp_name donde va a estar guardado el archivo temporalmente en la compu
$carpeta = "files/"; //Dirección de la carpeta

opendir($carpeta);//opendir abre la carpeta para poder guardar en ella
$destino = $carpeta.$_FILES['foto']['name']; //Muestra el destino de la carpeta y lo guarda con su nombre

copy($_FILES['foto']['tmp_name'],$destino); //estamos copiando de la fuente de donde se encuentra y lo guarda en el nuevo destino
echo "Archivo subido exitosamente<br>";
$nombre=$_FILES['foto']['name']; //muestra la imagen
echo "<img src=\"files/$nombre\"><br>";
echo $_FILES['foto']['name']."<br>";//Muestra el nombre de la foto
echo $_FILES['foto']['size']."Bytes<br>";//Muestra el tamaño 
echo $_FILES['foto']['type'];//Muestra el tipo de imagen
?>