<?php
$Va1=50;
$Va2=75;
$Va3=180;

/*sentencia if operadores relacionales o logicos
(condicion)
{codigo o accion al realizar en el navegador si se cimple la condicion}
*/
if($Va1 >= $Va2){
   // echo"el valor uno es mayor al valor dos el cual es: ".$Valor1;
   echo "verdadero";
    

}else{
 //dentro de el else, si la accion es contaria al if dentro de las llaver la accion a ejecutarse    
//echo "la declaracion de que el valor1 es mayor que el valor2 es falsa";
    echo"falso";

}

//comparando el valor de la variable con un string"."<br>";
echo "comparando el valor de la variable con un string"."<br>";
$People="Hombre";

if($People == 'Hombre'){
 echo "como el genero de la variable persona es Hombre se llamara Luis"."<br> <br>";
}else{
    echo "como no se cumple el if entonces el genero no es hombre por lo tanto no puedo ponerle nombre";
}

//comparando el valor de la variable con un string 
//operadores logicos
//and && si solo si 
//or || que se cumpla cualquiera de las dos 


if($V1 >= $V2 &&  $V1 >= $V3 ){
echo"el valor de: ".$V1.  "es mayor a ".$V2. "pero si mayor a  ".$V3;

}else if($V2 >= $V1 and $V2 >= $V3 ){
 echo "el valor de:".$V2." es mayor a ".$V1." y mayor a ".$V3;
}
elseif ($V3 >= $V1 && $V3 >= $V2) {
    echo "el valor de: ".$V3 ."es mayor a " .$V1." y mayor a ".$V2;

}else{
    echo"no se cumple ninguna de las condiciones";
}

echo "<br> <br>";

//validacion si es una consonante 
$letra="a";
if($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o '||$letra == 'u'){
    echo "el valor de la variable de la letra es ".$letra ." es una vocal";
}else{
    echo "el valor de la variable es una consonante";
}


?>