<?php

include('navegador.php');

?>

<section class="serv_contenido">

    <h1>SERVICIOS DISPONIBLES EN NUESTRO RETIRO DE DESCANSO:</h1>

    <ul>
        <li> <a href="servicios.php?servicios=masajes">Masajes</a></li>
        <li> <a href="servicios.php?servicios=sauna">Sauna</a></li>
        <li> <a href="servicios.php?servicios=belleza">Belleza Facial</a></li>
    </ul>

</section>


<?php

$nombre = '';
$descripcion = '';
$precio = '';
$img = '';

if (isset($_GET['servicios'])) {
    switch ($_GET['servicios']) {
        case 'masajes':
            $nombre = 'Masajes Relajantes';
            $descripcion = 'Descripcion: El masaje total consiste en una manipulación gradual del cuerpo para estimular sus diferentes partes, una a la vez. Por lo general, el masajista comienza desde los pies y sube lentamente las piernas, la espalda, los brazos, los hombros, finalmente el cuello y la cabeza.';
            $precio = 'Precio: $2000';
            $img = './img/masajes.jpg';
            break;
        case 'sauna':
            $nombre = 'Sauna Tibetano';
            $descripcion = 'Descripcion: El calor de la sauna mejora la circulación de la sangre rica en oxígeno y nutrientes por todo el cuerpo. Esto, a su vez, ayuda a que los músculos dañados por el ejercicio se reparen, para que puedas volver al sillón más rápido.';
            $precio = 'Precio: $2400';
            $img = './img/sauna.jpg';
            break;
        case 'belleza':
            $nombre = 'Belleza Facial';
            $descripcion = 'Descripcion: La estética facial se centra en el rejuvenecimiento, embellecimiento de la cara y cuello, corrigiendo rasgos para que puedan mejorar la belleza del rostro mediante técnicas no invasivas.';
            $precio = 'Precio: $3700';
            $img = './img/belleza.jpg';
            break;
    }
}
?>

<div class="serv_descripcion">
    <h2> <span class="resaltar"><?php echo $nombre; ?></span> </h2>
    <h3> <?php echo $descripcion; ?> </h3>
    <h3> <?php echo $precio; ?> </h3>
    <div class="cont_img">
       <img src="<?php echo $img ?>" alt="<?php echo $nombre ?>">
    </div>
</div>

</body>

</html>