<?php
    $restaurant = array();
    for ($i=0; $i<10; $i++) {           // rellenar de rand el array
        $restaurant[$i] = rand(0, 5);
    }

    function quantity($number) {
        if ($number == 0) { return " està buida"; } // condicionales de 0 y 5
        if ($number == 5) { return " està plena"; } // 
        return " té ${number} comensals";           // si no pasa los condicionales anteriores, 
    }                                               // cae en la última línea
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2 - Facundo Barrios</title>
</head>
<body>
    <ul>
        <?php 
            for ($i=0; $i<10; $i++) {
        ?> 
        <li> La taula <?= $i . quantity($restaurant[$i]); ?> </li>  <!-- bucle para crear los li con su contenido -->
        <?php
            }
        ?>
    </ul>
</body>
</html>