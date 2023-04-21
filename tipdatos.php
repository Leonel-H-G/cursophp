<?php
//declaraciones de variables (php es de tipiado dinamico )
$num=55.58;
$nombre="fernando";
$Reasig;
$Reasig="ya le di un valor  " ;
echo $numero;
echo $Reasig;
echo "<br> <br> <br> ";
//tipos de datos;

$Entero =54;
$Float=21.30;
$Verdadero= true;
$Falso= false;
$string= "esta es una cadena de caracteres";
//Print imprime solo una cadena 
print "esto es solo una cadena <br>";
//Con echo se imprimen varias cadenas a la vez
echo "esto es una cadena ","esta es otra cadena <br><br>";

//CONCATENACION
$s2="el numero que se encuentra almacenado en la variables Entero es: ";

echo $s2.$Entero."<br>"; 
print $Float."<br>";
print $Verdadero."<br>";
echo"<br>";


//imprimir el tipo de dato de la variable

echo var_dump ($Float);
echo "<br>";
echo var_dump($Entero);
echo "<br>";
echo var_dump($Verdadero);
echo "<br>";
echo var_dump($Falso); 
echo var_dump($string);
echo "<br> <br>";

//arreglos de tipos de datos compuestos 
/*array 
object 

*/

$lenguajes = array("JavaScript", "Java", "C++", "Phython", "PHP", 50);
echo var_dump($lenguajes);
echo"<br><br>";



//Reasignar variables
$mensaje="seguimos programando en php";
$mensaje=null;

$mensaje="muy buenas";
echo var_dump($mensaje);


/*pseoudo-types , palabras clave
-mixed(mezclar , numero letras symbolos)
-number(numero)
-callback(retorno invocable)
-array
-object
-void(retornard una funcion)
*/
















?>