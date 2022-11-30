<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable & Operadores</title>
    <link rel="stylesheet" href="stilos.css">
</head>

<body>
    <h1>Variable & Operadores</h1>
    </br>

    <?php
    // esto es un comentario
    # esto es otro comentario
    /* Estos es un comentario multi 
    linea a diferencia del resto */

    echo "<h2>Hola mundo con PHP</h2>";

    //VARIABLES
    $curso_1 = 'PHP y MySql Inicial';
    $unidades_curso_1 = '8';
    $arancel_1 = 10666;
    $fecha_1 = '10/11/2022';

    $curso_2 = 'PHP y MySql Intermedio';
    $unidades_curso_2 = '6';
    $arancel_2 = 13897;
    $fecha_2 = '10/10/2023';


    $curso_3 = 'PHP y MySql Avanzado';
    $unidades_curso_3 = '5';
    $arancel_3 = 16000;
    $fecha_3 = '21/12/2023';

    ?>
    </br>

    <section class="contenido">

        <div>
        <h2> <?php echo $curso_1; ?> </h2>
        <ul>
            <li> Duracion: <?php echo $unidades_curso_1; ?> meses</li>
            <li> Arancel: $ <?php echo $arancel_1; ?> </li>
            <li> Fecha: <?php print $fecha_1; ?> </li>
        </ul>
        </div>

        <div>
        <h2> <?php echo $curso_2; ?> </h2>
        <ul>
            <li> Duracion: <?php echo $unidades_curso_2; ?> meses </li>
            <li> Arancel: $<?php echo $arancel_2; ?> </li>
            <li> Fecha: <?php print $fecha_2; ?> </li>
        </ul>
        </div>

        <div>
        <h2> <?php echo $curso_3; ?> </h2>
        <ul>
            <li> Duracion: <?php echo $unidades_curso_3; ?> meses </li>
            <li> Arancel: $<?php echo $arancel_3; ?> </li>
            <li> Fecha: <?php print $fecha_3; ?> </li>
        </ul>
        </div>

    </section>
    </br>

    <?php
    $duracion_total = $unidades_curso_1 + $unidades_curso_2 + $unidades_curso_3;
    $arancel_total = $arancel_1 + $arancel_2 + $arancel_3;
    $dolar = 250;
    $arancel_dolar = $arancel_total / $dolar;
    ?>


    <section class="totales">

        <h3> TOTALES: </h3>
        <ul>
            <li> Duracion total: <?php echo $duracion_total; ?> meses </li>
            <li> Aranceles totales: $ <?php echo $arancel_total; ?> </li>
            </br>
            <li> Aranceles valor dolar: $ <?php echo round($arancel_dolar); ?> </li>
        </ul>

    </section>

        <!-- Constantes   -->  
        <?php
        const CONSTANTE = "Constante con palabra reservada";
        echo CONSTANTE;
        ?>
        </br>
        
        <!-- Forma antigua de hacer constantes -->
        <?php
        define ('SALUDO', 'Hola a todos.');
        echo SALUDO;
        ?>
        </br>

      <!--   Array -->
        <?php
        define ('COLORES', array ('Azul','Amarillo','Rojo')); 
        echo COLORES[1];

        const COLORES2 = array ('Azul','Amarillo','Rojo');
        echo "</br>";       //aca se pide pantallazo de salto de linea
        echo COLORES2[2];
        ?>

        <!--  Constantes por defecto de PHP -->
        <?php 
        echo "</br>";
        echo PHP_INT_MAX; 
        echo "</br>";
        echo PHP_INT_MIN;
        echo "</br>";
        echo PHP_VERSION;
        ?>

</body>

</html>