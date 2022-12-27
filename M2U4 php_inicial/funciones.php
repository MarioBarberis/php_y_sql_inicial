<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en PHP</title>
</head>

<body>

    <!-- En "enviarconsulta" se usaron funciones prediseñadas de php, ahora las crearemos nosotros. -->

    <h1>FUNCIONES EN PHP</h1>

    <?php


    saludar("Oscar", "Lorenzo");
    saludar("Me", "Junio");
    saludar("Lucio", "Bortex");
    saludar("Carlo", "Menem");

    function saludar($nombre, $apellido)
    {
        echo "Hola $nombre $apellido <br>";
    }

    ?>
    <h2> Devolver Valores </h2>

    <?php

    function cuadrado($num)
    {
        return $num * $num;
    }

    echo cuadrado(5);

    function numeros()
    {
        return array(9, 18, 8, 2, "b");
    }

    list($cero, $uno, $dos, $tres, $cuatro) = numeros();

    echo ("<br>" . $cero . ".");
    echo ($uno . ".");
    echo ($dos . ".");
    echo ($tres . ".");
    echo ($cuatro . ".");

    ?>

</body>

</html>