<?php
//declarar una variable + identificador + asignacion de dato o valor 

$Variables =45;
$Alerta ="El valor de la variables es: ";
$N1= 56;
$N2= 24;
$N3= 89;

//operadores aritmeticos (+,-,*,/)
$Suma =$N1+$N2+$N3;
echo "la suma de".$N1."+".$N2."+".$N3."=".$Suma."<br>";

$resta=$N1-$Numero2-$N3;
echo "la resta de".$N1."-".$N2."-".$N3."=".$resta."<br>";

$Multiplicacion=$N1*$Numero2*$N3;
echo "la multipliacion de".$N1."*".$N2."*".$N3."=".$Multiplicacion."<br>";

$Division=$N1/$Numero2/$N3;
echo "la division de".$N1."/".$N2."/".$N3."=".$Division."<br>";

//declarar una contante (no cambia)
define ('Hora','consta de 60 minutos');
echo Hora;
echo constant('Hora')."<br>";
echo var_dump(constant('Hora'))."<br>";
echo var_dump($Suma)."<br>"."<br>";

//ocupar operadores con variables y constantes 
$Radio=2;

define('Pi', '3.1416');
$Ejemplo = Pi * $Radio *$Radio; 
echo $Ejemplo;

$Mensaje2= "el area del circulo radio es ".$Radio." por le valor de Pi que es: ". Pi." el resultado es ".$Ejemplo;
echo $Mensaje2."<br>";

echo var_dump(constant('Pi'));
echo "<br>";


$Decremento =10;
echo "el valor del Decremento es: ".--$Decremento."<br>";

$Incremento = 10;
echo "el valor del incremento es de: ".++$Incremento;










?>