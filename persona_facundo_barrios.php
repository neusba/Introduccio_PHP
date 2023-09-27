<!-- 
    Fichero que crea unas variables PHP con los datos de una persona (o sea, yo) y luego las invoca mediante
    "echo $variable" para asi insertar el valor de cada variable en donde corresponda. 
-->

<!DOCTYPE html>     <!-- Doctype HTML clásico -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>
<body>
    <?php                                   // apertura del apartado de código PHP :D
        $nomAlumne = "Facundo";             // las variables se declaran como $variable
        $cognomAlumn = "Barrios";           // no es tipado, por lo que simplemente se le asignan los valores
        $edat = 27;                         // sin declarar el tipo. se respeta que los string van entre comillas
        $naixement;                         // y los int van sin comillas
        $fecha = new DateTime();            // para la fecha hay que instanciar la clase DateTime
        $fecha->setDate(1996, 7, 7);        // la fecha se setea con la siguiente funcion
        $telefon = 633490396;
        $direccio = "Carrer de Concili Trento, 179";
        $email = "fcb096@gmail.com";
        $treballa = "Si";
        $alcada = 177;
    ?>
        <h1>Descrivint a <?php echo $nomAlumne . " " . $cognomAlumn ?></h1>         <!-- el bloque PHP se abre -->
        <h2>Les dades de <?php echo $nomAlumne ?> son:</h2>                         <!-- igual que al inico del body -->
        <form action="">                                                            <!-- cada variable se llama con  -->
            <ul>                                                                    <!-- echo $variable -->
                <li>Es diu: <?php echo $nomAlumne ?></li>                           <!-- esto printea el valor de  -->
                <li>Te <?php echo $edat ?> anys</li>                                <!-- dichas variables -->
                <li>Va naixer l'any: <?php echo $fecha->format('Y-m-d') ?></li>     <!-- para darle formato a la fecha -->
                <li>El seu telèfon és: <?php echo $telefon ?></li>                  <!-- hay que usar la funcion FORMAT -->
                <li>Viu a: <?php echo $direccio ?></li>                             <!-- declarando el formato que  -->
                <li>El seu email és: <?php echo $email ?></li>                      <!-- queremos utilizar -->
                <li>Treballa: <?php echo $treballa ?></li>
                <li>I medeix <?php echo $alzada ?></li>
            </ul>
        </form>
</body>
</html>
