<?php
//La instruccion "fopen" sirve para abrir y crear el archivo si no existe
//la instruccion "a" sirve para escribir en el archivo si ya existe o si no crearlo
//"die" es por si hay problemas para conectar
//"fputs" instruccion para insertar datos en nuestro archivo
//"fwrite" instruccion para insertar datos en nuestro archivo (es mas segura)
//"fclose" instrucción para cerrar el archivo
$fi = fopen("archivo.txt", "a") or die("problemas al crear archivo");

fwrite($fi, "Datos: ");
fwrite($fi, "\n");
fwrite($fi, $_POST['nombre']);
fwrite($fi, "\n");
fwrite($fi, $_POST['comentario']."\n");
fwrite($fi, "----------------------FIN DEL ARCHIVO");
fclose($fi);
echo "El archivo se ha creado, checa la carpeta php-cf";

?>