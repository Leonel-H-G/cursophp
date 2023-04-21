<?php
/*trabajaremos con el ciclo while y do...while ;

while: evaluar la expresion para llevar acabo una accion  , valida la expresion y se ejecuta accion

do while: primero la acccion y despues validar la expresion 


while (exprecion o validacion) {
    acciones se cumpla la expresion
}

do{
    sentenci o accion 

}while(expresion o validacion);

*/

$var=0;
while ($var < 25) {
    $var ++; //se incrementa la variable  uno en uno 
    echo"el valor de la variable es: = ".$var."<br> <br>";

}
echo "el ciclo while acaba en ".$var;

echo"<br><br><br>";


//ciclo do while , la expresion a evaluar se efectua al final de la sentencia

$Variable=9;
do {
 echo $Variable."<br>";
 $Variable++;
 //echo "se ejecutara el codigo por que primero genera la accion antes que la validacion";

} while ($Variable <=10);
//echo "se ejecuta el codigo una vez que la expresion o validaciion se cumple";

echo"<br><br>";




echo "generar la tabla de multiplicar utilizando el ciclo while <br>";
//generar la tabla de multiplicar utilizando el ciclo while



$numero=2;
$inc=1;

while ($inc<= 10):

    echo $inc."x".$numero."=".($inc *$numero)."<br>";
    $inc++;

endwhile;
    
echo " <br><br><br>";
//do while

do {
    
    echo $numero." x ".$inc. " =".($inc*$numero)."<br>";
    $inc++;

} while ($inc <= 10);

?>