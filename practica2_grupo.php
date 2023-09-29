<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió d'hotel</title>
</head>
<body>
    <?php
        $planta = [5];     // L'hotel té 5 plantes
        $habitacions = [10];   // Cada planta té 10 habitacions
    ?>
    <div>
        <ul>
        <?php
            for ($i = 0; $i <= $planta; $i++) {
                for ($j = 0; $j <= $habitacions; $j++) {
        ?>
            <li>
            <?php
                $clients = rand(0, 4);
                array_push($habitacions[$j], $clients);
                if ($clients == 0) {
                    echo "L'habitació ${j} de la planta ${i} està buida";
                } else if ($comensals == 4) {
                    echo "L'habitació ${j} de la planta ${i} està plena";
                } else {
                    echo "L'habitació ${j} de la planta ${i} té ${clients} persones";
                }
                }
            }
            ?>
            </li>
        </ul>
    </div>
</body>
</html>