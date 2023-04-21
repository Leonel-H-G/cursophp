<?php

/*
foreach (expresion as $variable){
    acciones que se tendra dentro del bucle 
}


El bucle foreach es un tipo especial de bucle que permite recorrer estructuras que contienen varios elementos 
(como matrices, recursos u objetos) sin necesidad de preocuparse por el número de elementos.
puede determinar tipos de arreglos como lo siguiente 

*/
$Arreglo = ["abcdefghijk",54,'e',14.5,true];
echo "<pre>\n";
var_dump($Arreglo);
echo "<pre>\n";
foreach ($Arreglo as $Recorrido) {
    echo "<p>$Recorrido</p>\n";
}
echo "termina el cliclo <br>";
?>