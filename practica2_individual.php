<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió de restaurant</title>
</head>
<body>
    <ul>
    <?php
        $restaurant = [10];
        for ($i = 0; $i <= $restaurant; $i++) { 
    ?>
        <li>
        <?php
            $comensals = rand(0, 5);
                if ($comensals == 0) {
                    echo "La taula ${i} està buida";
                } else if ($comensals == 5) {
                    echo "La taula ${i} està plena";
                } else {
                    echo "La taula ${i} té ${comensals} comensals";
                }
        }
        ?>
        </li>
    </ul>
</body>
</html>