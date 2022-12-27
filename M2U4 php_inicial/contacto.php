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

    <div class="titulo_receta"> <h4> ¡ ENVIANOS TUS RECETAS !</h4></div>

    <section class="contacto_contenido">
        <form action="enviar_consulta.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="contacto_input">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="contacto_input">
            <label for="edad">Edad:</label>
            <input type="text" name="edad" class="contacto_input">
            <label for="mensaje">Receta:</label>
            <textarea name="mensaje" cols="30" rows="10" class="contacto_input"> </textarea>
            <input type="submit" value="Enviar Nueva Receta">
        </form>

        <?php 
        if (isset($_GET['ok'])) {
            echo '<h3> Su mensaje ha sido enviado con éxito. </h3>';
        }
        ?>


    </section>

</body>

</html>