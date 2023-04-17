<?php
if (isset($_POST['btnsum'])) {

    $Num1=$_POST['num1'];
    $Num2=$_POST['num2'];

    if (!is_numeric($Num1)) {
        echo "el valor asigando no es un valor numerico";
    }
    elseif (!is_numeric($Num2)) {
        echo "el valor asigando en la caja 2 no es un valor numerico";
    }
    else{
        $suma=$Num1+$Num2;
        echo "el valor de la suma es ".$suma;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    
    <input type="text" name="num1" placeholder=" ingresa un numero" required>+
    <input type="text" name="num2" placeholder=" ingresa un numero" required>
    <input type="submit" value="Sumar" name="btnsum">
    
</form>
</body>
</html>