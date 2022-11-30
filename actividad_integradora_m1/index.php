<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Integradora M1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>TARIFAS DE VUELOS AL SUR DE ARGENTINA</h1>    

<!-- constantes -->
<?php 
const TITULO = 'Vuelos Economicos SUR ARG. S.A.'
?>

<!-- variables -->
<?php
$viaje_1 = 'Neuquen';
$valor_1 = 8000; 
$salida_1 = 'Agosto';

$viaje_2 = 'Santa Cruz';
$valor_2 = 12000; 
$salida_2 = 'Octubre';

$viaje_3 = 'Chubut';
$valor_3 = 10000; 
$salida_3 = 'Julio';

$viaje_4 = 'Rio Negro';
$valor_4 = 9000; 
$salida_4 = 'Febrero';

?>

<!-- operadores -->

<?php 

$dolar = 316;
$dolar_1 = $valor_1 / $dolar;
$dolar_2 = $valor_2 / $dolar;
$dolar_3 = $valor_3 / $dolar;
$dolar_4 = $valor_4 / $dolar;

?>

<section>

<div class="uno">
    <p>La opcion 1 de <?php echo TITULO?> es:</p>
    <p> Lugar: <?php echo $viaje_1 ?></p>
    <p> Arancel: <?php echo $valor_1 ?></p>
    <p> Mes de salida: <?php echo $salida_1 ?></p>
    <p> Valor en DOLAR: <?php echo round($dolar_1) ?> </p>
</div>
</br>
<div class="dos">
<p>La opcion 2 de <?php echo TITULO?> es:</p>
    <p> Lugar: <?php echo $viaje_2 ?></p>
    <p> Arancel: <?php echo $valor_2 ?></p>
    <p> Mes de salida: <?php echo $salida_2 ?></p>
    <p> Valor en DOLAR: <?php echo round($dolar_2) ?> </p>
</div>
</br>
<div class="tres">
<p>La opcion 3 de <?php echo TITULO?> es:</p>
    <p> Lugar: <?php echo $viaje_3 ?></p>
    <p> Arancel: <?php echo $valor_3 ?></p>
    <p> Mes de salida: <?php echo $salida_3 ?></p>
    <p> Valor en DOLAR: <?php echo round($dolar_3) ?> </p>
</div>
</br>
<div class="cuatro">
<p>La opcion 4 de <?php echo TITULO?> es:</p>
    <p> Lugar: <?php echo $viaje_4 ?></p>
    <p> Arancel: <?php echo $valor_4 ?></p>
    <p> Mes de salida: <?php echo $salida_4 ?></p>
    <p> Valor en DOLAR: <?php echo round($dolar_4) ?> </p>
</div>
</br>

</section>

</body>
</html>