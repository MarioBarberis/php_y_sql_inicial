<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="Stylo.css">
</head>

<body>
    <header class="header">
        <nav class="botonera_princ">
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="tienda.php">Productos</a></li>
                <li> <a href="#">Nosotros</a></li>
                <li> <a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section class="tienda_contenido">
        <h1> <span class="titulodulce"> POSTRES DULCES MÁS DELICIOSOS </span> </h1>
      
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
                $nombre = 'Nombre: Helado rico';
                $ingrediente = 'Ingredientes: Leche,dulce,azucar,colorantes.';
                $precio = 'Precio: $1000';
                $img = './img/helado.jpg';
                break;
            case 'chocolate':
                $nombre = 'Nombre: Chocolate crocante';
                $ingrediente = 'Ingredientes: Chocochispas, chocosustancias';
                $precio = 'Precio: $850';
                $img = './img/chocolate.jpg';
                break;
            case 'budin':
                $nombre = 'Nombre: Budin exquisito';
                $ingrediente = 'Ingredientes: Harina, limon, azucar';
                $precio = 'Precio: $400';
                $img = './img/budin.jpg';
                break;
        }
    }
    ?>


    <div class="productos_descripcion">
        <h2> <?php echo $nombre; ?> </h2>
        <h3> <?php echo $ingrediente; ?> </h3>
        <h3> <?php echo $precio; ?> </h3>
        <div class="contenedorimg">
            <img src="<?php echo $img ?>" alt="<?php echo $nombre ?>">
        </div>
    </div>


</body>

</html>