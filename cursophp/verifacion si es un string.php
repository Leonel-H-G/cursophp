<?php
//la salida de datos sera true el valor es tipo string y false de lo contrario 

//foreach blucle especial que permite recorrer las esestucturas que contienen varios elementos

$valores= array(false,true,null,'aeiou','23',23,'23.5','','','0',0); 
 foreach ($valores as $valor){
    echo "es un string(";
    //var_export: obtiene la informacion estructurada de la varible dada , saca la informacion 
    var_export($valor);
    echo")=";

   echo var_dump(is_string($valor));
 
echo"<br><br><br>";

}



$Mensaje="esto es una cadena de caracteres";
if (is_string($Mensaje)) {
   
    echo $Mensaje."<br>";

var_dump($Mensaje);

}else{
    echo"esto no es una cadena de caracteres  por que es: ".$Mensaje; 
}





?>