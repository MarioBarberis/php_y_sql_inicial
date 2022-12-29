<?php

include('header.php');

?>

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

<?php

include('footer.php');

?>

</html>