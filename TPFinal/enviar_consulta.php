<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$email_form = $_POST['email'];                   


//Envio de mail
$cuerpo_mail = "Nombre: ". $nombre_form. "Apellido: " . $apellido_form . "Edad: " . $edad_form . "E-mail: " . $email_form;

mail("mariojbarberis@hotmail.com","Registros a promos", $cuerpo_mail);


//Conectamos a BASE DE DATOS
//Conectamos con una funcion de php y lo guardamos en una variable (localhost,usuario,contraseña,nombrebd)

/* $conexion = mysqli_connect ("localhost", "root", "", "php_inicial") or exit ("No se pudo conectar"); */


$conexion = mysqli_connect ("localhost", "id19044906_winchester", "lbxz_]WYw9)Cw9id", "id19044906_mariobarberis") or exit ("No se puede conectar");

//esto permite escribir la consulta y enviarlo a la tabla correpondiente de la bd.
mysqli_query ($conexion, "INSERT INTO tpfinal VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$email_form' )" );
mysqli_close($conexion);

header("Location: contacto.php?ok");