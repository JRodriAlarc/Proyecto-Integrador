<!DOCTYPE html>
<html lang="es">
    <head>
    <link rel="shortcut icon" href="../img/php-icon-3.png">
        <title>Ejemplo</title>
    </head>
    <body>

        <?php
            //echo "¡Hola, soy un script de PHP!"; 
            echo "Tu Nombre es: " . $_POST["exampleInputText1"] . ' ' .  $_POST["exampleInputText2"] . '<br>';
            echo "Tu Correo es: " . $_POST["exampleInputEmail1"] .'<br>';
            echo "Tu Contraseña es: " . $_POST["exampleInputPassword1"] . '<br>';
            echo "Tu Confirmación de Contraseña es: " . $_POST["exampleInputPassword2"];
        ?>

    </body>
</html>