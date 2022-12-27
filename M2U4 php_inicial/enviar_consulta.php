<?php
//Creamos las variables que son completadas por el usuario en formulario
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$mensaje_form = $_POST['mensaje'];                   


//Envio de mail
$cuerpo_mail = "Nombre: ". $nombre_form. "Apellido: " . $apellido_form . "Edad: " . $edad_form . "Mensaje: " . $mensaje_form;

mail("mariojbarberis@hotmail.com","Recetas desde mi sitio web", $cuerpo_mail);


//Conectamos a BASE DE DATOS
//Conectamos con una funcion de php y lo guardamos en una variable (localhost,usuario,contraseña,nombrebd)
$conexion = mysqli_connect ("localhost", "root", "", "php_inicial") or exit ("No se pudo conectar");

//esto permite escribir la consulta y enviarlo a la tabla correpondiente de la bd.
mysqli_query ($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$mensaje_form' )" );
mysqli_close($conexion);

header("Location: contacto.php?ok");