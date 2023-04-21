<?php
//validacion numericos con if 

$C1=8;
$C2=9;
$C3=9;
$C4=8;
$C5=9;
$churro=7;

//forma corta de validacion 
echo"forma corta de validacion de que sea un numero el valor de la variable <br><br>";


if(is_numeric($C1)&& is_numeric($C2)&& is_numeric($C3)&& is_numeric($C4)&& is_numeric($C4)){
$promedio=($C1+$C2+$C3+$C4+$C5)/5;
  if($promedio>=$churro){
    echo"sacaste ".$promedio." estas aprobado rey";

  }else{
    echo"sacaste ".$promedio." te vas a recurse piedra";
  }
}else{
echo "no valido";
}

echo "<br><br><br><br>";

echo "otra forma larga  de validacion <br> <br> ";

//validacion forma larga 


if(!is_numeric($C1)){
   echo "el valor de la calificacion es: ".$C1." no es un valor numerico ";
}
  elseif (!is_numeric($C2)) {
    echo "el valor de la calificacion es: ".$C2." no es un valor numerico "; 
}
  
elseif (!is_numeric($C3)) {
    echo "el valor de la calificacion es: ".$C3." no es un valor numerico ";
 }

elseif (!is_numeric($C4)) {
    echo "el valor de la calificacion es: ".$C4." no es un valor numerico ";
 }

elseif (!is_numeric($C5)) {
    echo "el valor de la calificacion es: ".$C5." no es un valor numerico ";
 }


else {
    $promedio=($C1+$C2+$C3+$C4+$C5)/5;
  if($promedio>=$churro){
    echo"El promedio obtenido es de  ".$promedio." por lo tanto  estas aprobado";

  }else{
    echo"El promedio obtenido es de".$promedio." por lo tanto estas no reprobrado ";
  }
   
}

?>