<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar Base de datos</title>
</head>
<body>
	<h2>Modifica tu nombre de usuario</h2>
	<form action="modificar.php" method="post">
		<label for="">Usuario anterior: </label><input type="text" name="viejo">
		<label for="">Usuario nuevo: </label><input type="text" name="nuevo">
		<input type="submit" value="Modificar">
	</form>
</body>
</html>