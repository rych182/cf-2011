<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Subir una imagen</title>
</head>
<body>
	<form action="procesar.php" method="post" enctype="multipart/form-data">
		<input type="file" name="foto">
		<input type="submit" value="Upload">
	</form>
</body>
</html>