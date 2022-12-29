<?php

include('navegador.php');

?>
    <div class="titulo_registro"> <h4> ¡ REGISTRATE PARA ENTERARTE DE LAS PROMOCIONES !</h4></div>

    <section class="contacto_contenido">
        <form action="enviar_consulta.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="contacto_input">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="contacto_input">
            <label for="edad">Edad:</label>
            <input type="text" name="edad" class="contacto_input">
            <label for="email">E-mail:</label>
            <input type="text" name="email" class="contacto_input">
        <!--     <textarea name="mensaje" cols="30" rows="10" class="contacto_input"> </textarea> -->
            <input type="submit" value="Enviar Registro">
        </form>

        <?php 
        if (isset($_GET['ok'])) {
            echo '<h3> Sus datos han sido enviado con éxito. </h3>';
        }
        ?>


    </section>

</body>

</html>