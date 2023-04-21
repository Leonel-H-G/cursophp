<?php
/*utilizar las sentencia de flujo if y else en su metodo alternativo
utilizar constantes, variables, operadores aritmeticos , logicos y de relacion 

el ejercicio: Calcular la edad con años, meses, dias, horas utilizando un año de nacimiento e indicando si es mayor o menor 
de edad imprimiendo los datos como años, meses, dias, horas.
*/

define('actual', 2023);
define('meses', 12);
define('dias', 365);
define('horas',24);

$año=2005;
$m=18;

$e= actual - $año;
$meses=$e* meses;
$dias=$e*dias;
$horas= dias*horas*$e;

if (is_numeric($año)&& is_numeric($m)&& is_numeric($meses)&& is_numeric($dias)&& is_numeric($horas)):
  if ($e >= $m):  
    echo "eres mayor de edad por que: ";
    echo "tienes: ".$e." años de vida <br>";
    echo "son: ".$meses." meses de vida <br>";
    echo "son: ".$dias." dias de vida <br>";
    echo "son: ".$horas." horas de vida <br>";
  else:
    
    echo "eres menor de edad por que: ";
    echo "tienes: ".$e." años de vida <br>";
    echo "son: ".$meses." meses de vida <br>";
    echo "son: ".$dias." dias de vida <br>";
    echo "son: ".$horas." horas de vida <br>";
  endif;

else:

    echo "los valores asignados en las variables no son valor numericos ";

endif;
?>