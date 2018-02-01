<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
</head>
<body>
	<h2>La pinshi calculadora del rick.</h2>
<form action="calculadora1.php" method="post" name="calc">
	<label for="">Coloca los valores:</label><br><br>
	<input type="text" name="c1"><br><br>
	<input type="text" name="c2"><br><br>
	<label for="">Elige una operacion</label><br><br>
	<select name="lista" id="">
		<option value="suma">Suma</option>
		<option value="resta">Resta</option>
		<option value="multiplicacion">Multiplicacion</option>
		<option value="division">Division</option>
	</select>
	<input type="submit" value="Cliqueame">
</form>
</body>
</html>