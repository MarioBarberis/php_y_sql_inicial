<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <nav class="botonera_princ">
            <ul>
                <li> <a href="home.php">Home</a></li>
                <li> <a href="tienda.php">Productos</a></li>
                <li> <a href="#">Nosotros</a></li>
                <li> <a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section class="tienda_contenido">
        <h2>Productos</h2>
        <h4>Postres</h4>

        <ul>
            <li> <a href="tienda.php?productos=helado">Helado</a></li>
            <li> <a href="tienda.php?productos=chocolate">Chocolate</a></li>
            <li> <a href="tienda.php?productos=budin">Budin</a></li>
        </ul>

    </section>


    <?php
    
    $nombre = '';
    $ingrediente = '';
    $precio = '';

    if (isset($_GET['productos'])) {
        switch ($_GET['productos']) {
            case 'helado':
                $nombre = 'Helado rico';
                $ingrediente = 'Leche,dulce,azucar,colorantes.';
                $precio = 1000;
                $img = './img/helado.jpg';
                break;
            case 'chocolate':
                $nombre = 'Chocolate crocante';
                $ingrediente = 'chocochispas, chocosustancias';
                $precio = 850;
                $img = './img/chocolate.jpg';
                break;
            case 'budin':
                $nombre = 'Budin exquisito';
                $ingrediente = 'harina, limon, azucar';
                $precio = 400;
                $img = './img/budin.jpg';
                break;
        }
    }
    ?>



    <div class="productos_descripcion">
        <h2> <?php echo $nombre; ?> </h2>
        <h3> Ingredientes: <?php echo $ingrediente; ?> </h3>
        <h3> Precio: $<?php echo $precio; ?> </h3>
        <div class="contenedorimg">
            <img src="<?php echo $img ?>" alt="<?php echo $nombre ?>">
        </div>
    </div>


</body>

</html>