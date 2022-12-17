<?php

//BUCLE WHILE



/* $a = 5; */

/* while ($a <= 10) {
    echo $a++;
}
 */

/* while ($a <= 10) {
    echo "<br>";
    echo $a;
    $a++;
} */




/* $numero = 26;
$pares = 0;    //partimos de cero.
$impares = 0;

while ($numero > 0){
    if ($numero % 2 == 0 ){
        echo "El $numero es PAR. <br>";
        $pares++;
    }
    else {
        echo "El $numero es un numero IMPAR. <br>";
        $impares++;
    }
    $numero--;
}
 */





 //BUCLE FOR


 

   /*  for ($i = 4; $i <= 10; $i ++){
        echo "<br>";
        echo $i;
    } */




    for ($i = 0; $i <= 10; $i ++){
        echo "$i hola <br>";
        if ($i == 5) {
            break;                      //hace que se detenga el bucle.
        }
    }
?>