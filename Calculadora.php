<!DOCTYPE html>
<html>
//validacion de pruebas git
<head>
	<title>Calculadora</title>
</head>
<body>
	<form method="post" action="Calculadora.php">

	<input type="text" name="Numero1"><br>
	<input type="text" name="Numero2"><br>
	<select name="opciones">
		<option value="0">Sumar</option>
		<option value="1">Restar</option>
		<option value="2">Multiplicar</option>
		<option value="3">Dividir</option>
	</select>
	<br>
	<input type="submit" name="calcular" value="Calcular">
		
	</form>
</body>
</html>

<? php

	include ("C:\Users\dsoto\Desktop\P\prueba");
	if (isset($_REQUEST ['calcular'])) {
		$n1=$_REQUEST['numero1'];
		$n2=$_REQUEST['numero2'];
		$op=$_REQUEST['opciones'];

		switch ($op) {
			case 0: echo "$n1 + $n2 = " .matematica::sumar($num1,$num2);break;
			case 1: echo "$n1 - $n2 = " .matematica::restar($num1,$num2);break;
			case 2: echo "$n1 * $n2 = " .matematica::multiplicar($num1,$num2);break;
			case 3: echo "$n1 / $n2 = " .matematica::dividir($num1,$num2);break;
				
		}
	}

?>