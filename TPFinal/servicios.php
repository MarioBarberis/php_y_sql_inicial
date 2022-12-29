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

if (isset($_GET['servicios'])) {
    switch ($_GET['servicios']) {
        case 'masajes':
            $nombre = 'Masajes Relajantes';
            $descripcion = 'Descripcion: blablablabalblabla';
            $precio = 'Precio: $2000';
            $img = './img/masajes.jpg';
            break;
        case 'sauna':
            $nombre = 'Sauna Tibetano';
            $descripcion = 'Descripcion: blablablabalblabla';
            $precio = 'Precio: $2400';
            $img = './img/sauna.jpg';
            break;
        case 'belleza':
            $nombre = 'Belleza Facial y De Manos';
            $descripcion = 'Descripcion: blablablabalblabla';
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