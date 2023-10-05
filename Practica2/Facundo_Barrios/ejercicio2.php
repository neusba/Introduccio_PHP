<?php
    $hotel = array();
    for ($i=0; $i<5; $i++) {
       $hotel[$i] = floors();
    }


    function floors() {
        $floor = array();
        for ($i=0; $i<10; $i++) {           // rellenar de rand el array
            $floor[$i] = rand(0, 5);
        }
        return $floor;
    }

    function quantity($number) {
        if ($number == 0) { return " està buida"; } // condicionales de 0 y 5
        if ($number == 5) { return " està plena"; } // 
        return " té ${number} persones";           // si no pasa los condicionales anteriores, 
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
            for ($i=0; $i<5; $i++) {
                for ($j=0; $j<10; $j++) {
        ?>
        <li> A l'habitació <?= $j; ?> de la planta <?= $i; ?> <?= quantity($hotel[$i][$j]); ?> </li>
        <?php 
                }
            }
        ?>  
    </ul>
</body>
</html>