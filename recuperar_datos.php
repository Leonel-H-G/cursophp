<?php
//validacion del boton 
if (isset($_POST['Enviar'])) {

    //recuperacion de los campos 
    $Ne=$_POST['nombre'];
    $Ap=$_POST['apellidos'];
    $Fc=$_POST['fecha'];
    $Ema=$_POST['email'];

    //validacion si los datos estan vacios 
    if ($Ne=="") {
        echo" Falta asignar un nombre ";
    }    elseif ($Ap=="") {
            echo" Falta asignar apellidos ";
        }elseif ($Fc=="") {
            echo" Falta asignar tu fecha de nacimiento ";
        }elseif ($Em=="") {
            echo" Falta asignar tu correo electronico";
        }
        //alertas 
    else {
        echo"Tu nombre es ".$Ne." Tus apellidos son: ".$Ap." tu dia de nacimiento es: ".$Fc." tu correo es ".$Ema;
    }


}else {
    echo"No le diste click al boton";
}

//Enmaquetacion html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar datos</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="nombre" placeholder="ingresa tu nombre "> <br>
        <input type="text" name="apellidos" placeholder=" ingresa apellidos"> <br>
        <label for="">selecciona tu fecha de nacimiento </label><input type="date" name="fecha" > <br>
        <input type="email" name="email" placeholder="correo electronico"> <br>
        <input type="submit" value="Enviar" name="Enviar"><br>
    </form>
    



</body>
</html>