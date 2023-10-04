<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió d'hotel</title>
</head>
<body>
    <!-- Creación de variables -->
    <?php
        $plantas = array(5);    // L'hotel té 5 plantes
        var_dump($plantas);
    ?>
    <!-- Contenedor que tiene lo que se imprimirá --> 
    <div>
        <ul>
        <li>
            <!-- Lógica -->
            <?php
                foreach ($plantas as $piso) {
                    creaHabitaciones();
                }

                // Creamos 10 habitacion por cada piso
                function creaHabitaciones() {
                    $habitacions = array();
                    for ($i=0; $i<=10; $i++) {
                        $comensals = rand(0, 4);
                        $habitacions[] = $comensals;
                        cantidad($comensals, $habitacions[$i]);
                    }
                }
                
                // Imprimos la cantidad de comensales
                function cantidad($comensals, $habitacio) {
                    if ($comensals == 0) {
                        echo `L'habitació ${habitacio} està buida`;
                    } else if ($comensals == 4) {
                        echo `L'habitació ${habitacio} està plena`;
                    } else {
                        echo `L'habitació ${habitacio} té ${comensals}`;
                    }
                }
            ?>
        </li>
        </ul>  
    </div>
</body>
</html>