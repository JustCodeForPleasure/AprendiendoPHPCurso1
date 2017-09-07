<?php 
/*
Operadores Aritméticos:

+ suma
- resta
* multiplicacion
/ división

*/

$numero1 = 10;
$numero2 = 20;

$total = $numero1 + $numero2;

echo "La suma de " . $numero1 . " + " . $numero2 ." es = " . $total . "<br />";

/*
Operadores de Asignación:

=
+=
-=
*=
/=

*/

$numero3 = 10;
$numero4 = 20;

$numero1 += $numero2;

echo "La asignacion de " . $numero3 . " + " . $numero4 ." es = " . $numero1 . "<br />";

/*
Operadores de Comparación:

==
===
!=, <>
!==
>
<
>=
<=

*/

$dato = 10;

if($dato == 10){
	echo 'Es identico <br />';
}

/*
Operadores Lógicos:

and, &&
or, ||
xor
!

*/
$num = 10;

if($num >=10 && $num < 20){
	echo "Ejecuta <br />";
}
/*
Operadores de Incremento / Decremento:

++$x
--$x
$x++
$x--

*/

$num1 = 10;

$num1++;
echo $num1 . "<br />";

/*
Operadores de Cadenas:

.
.=

*/

$texto = 'Cadena de texto';
$texto2 = 'Una segunda Cadena de Texto';

$texto3 = $texto . $texto2;

echo $texto3 . "<br />";

$texto .= ' Concatenamos con .=';
echo $texto;
 ?>