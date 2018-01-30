<?php

/*Operadores de aritmetica
	$suma = 4 + 4;
	$multiplicacion = $suma * 3;

	echo $suma;
	echo "<br>";
	echo $multiplicacion;
*/
	/*Concatenando de manera distinta, muy útil para enviar correos

	$edad = "Tengo";
	$edad.= " 20";
	$edad.= " anios";

	echo $edad;
	*/

	/*
	Operadores de comparación

	igual (==)
	Identico (===)
	Diferente (!= o <>)
	No identidos (!==)
	Menor que (<)
	Mayor que(>)
	Menor o igual que (<=)
	Mayor o igual que (>=)
	*/

/* Te imprime 1 o nada si es verdad o no.
	echo (6 >= 4);
	echo "<br>";
	echo (2 == 2);
*/

/*El arroba elimina los errores que te lanza el servidor pero no los resuelve
echo "Hola";
@ define(); //esto es una constante sin parametros
*/

/* Incrementando 

Este es un incremento de 1 

$variable = 3;
echo $variable++;
echo "<br>";
echo $variable;

*/
/*Incrementa antes de imprimir
Por eso pone 4 y 4
$variable = 3;
echo ++$variable;
echo "<br>";
echo $variable;
*/

/*subtract one for one
$variable = 3;
echo $variable--;
echo "<br>";
echo $variable;
*/

/*First subtract before print and after substract again
$variable = 3;
echo --$variable;
echo "<br>";
echo $variable;
*/

/* sum first before print
$variable = 3;
echo ++$variable;
echo "<br>";
echo ++$variable;
*/

/*
Operadores de lógica
(&& ó and)Devuelve 1 si ambos operadores son 1.
(|| ó or)Devuelve 1 si alguno de los dos operadores es 1.

*/

echo ((2 == 2)and(2 != 1));
echo "<br>";
echo ((2 == 2)||(4 != 4));
?>
