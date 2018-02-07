<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sistema de registro</title>
</head>
<body>
	<form action="registrar.php" method="post">
		<table width="200">
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>Usuario</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pw"></td>
			</tr>
			<tr>
				<td>Confirmar password:</td>
				<td><input type="password" name="pw2"></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Registrar"></td>
			</tr>
		</table>
	</form><br>
	<a href="http://ricgc.com/php/">Regresar a la lista.</a>
</body>
</html>