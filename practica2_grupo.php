<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió d'hotel</title>
</head>
<body>
	<div>
		<ul>
		<?php
			$plantas = array();	// Declaramos el array que contendrá las plantas del hotel
			for ($i=0; $i<=5; $i++) {	// Específicamos en el for el número de plantas que queremos que tenga el hotel
				$plantas[] = creaHabitacion();	// Por cada planta, creamos su array de habitaciones correspondientes
			};
			
			// Función que crea las habitaciones en cada planta
			function creaHabitacion() {
				$habitaciones = array();	// Array que contendrá las habitaciones
				for ($i=0; $i<=10; $i++) {
		?>
			<li>
		<?php
				$comensales = rand(0, 4);
				$habitaciones[] = $comensales;	// Por cada habitacion del array asignamos una cantidad de comensales
				// Creamos una función de imprimá por pantalla el resultado
				imprimeCantidad($comensales, $i);
				}
			};
		?>
			</li>
		</ul>
    </div>
	<?php
	
	// Función que muestra cuantos comensales hay en cada habitación de cada planta
	function imprimeCantidad($comensales, $i) {
		if ($comensales == 0) {
			echo "La habitación ${i} està buida";
		} elseif ($comensales == 4) {
			echo "La habitación ${i} està plena";
		} else {
			echo "La habitación ${i} tiene ${comensales} comensales";
		}
	};
	?>
</body>
</html>


