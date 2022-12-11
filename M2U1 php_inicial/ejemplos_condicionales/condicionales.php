<?php

// if  ("si")

$numero = 18;

if ($numero > 20) {
    echo "Es mayor a 20.";
}
else{                                     // ("sino")
    echo "Es menor a 20 bebé.";     
}
echo "<br>";
echo "<br>";


// elseif

$a = 40;
$b = 40;

if ( $a > $b ) {
    echo "A es mayor a B chiqui.";
}
elseif ( $a == $b ) {      // de estos se puede usar varios, ayudan a mejorar la sintaxis.
    echo " Son iguales estos lagartos.";
}
else {
    echo " A es menor a B lamentablemente.";
}
echo "<br>";
echo "<br>";


//switch

$postre = 2;

switch($postre) {
    case 0:
        echo "Hoy tenemos chocotorta.";
        break;
    case 1:
        echo "Hoy elaboramos panqueques.";
        break;
    case 2:
        echo "Hoy haremos banana con dulce de leche.";
        break;
    default:
        echo "Flan.";  //esto es cualquier otro numero que no este explicitamente en un caso.
 }

echo "<br>";
echo "<br>";



$dulce = "chocotorta";  // se puede usar string en vez de numeros.

switch($dulce) {
    case "chocotorta":
        echo "Hoy tenemos chocotorta.";
        break;
    case "panqueques":
        echo "Hoy elaboramos panqueques.";
        break;
    case "banana":
        echo "Hoy haremos banana con dulce de leche.";
        break;
    default:
        echo "Flan."; 
 }
echo "<br>";
echo "<br>";


//variable GET
//se pasa una parte del valor a traves de la URL, en este caso el "nombre" agregando "?nombre=lucia"

echo '¡Hola ' . htmlspecialchars($_GET["nombre"]) . '!';

/* htmlspecialchars convierte los caracteres especiales en entidades HTML */

?>