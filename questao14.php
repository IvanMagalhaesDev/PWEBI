<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $contador = 0;
    function incrementarContador() {
        static $contador = 0;
        $contador++;
        echo "Contador: " . $contador . "<br>";
    }
    incrementarContador();
    incrementarContador();
    incrementarContador();
    incrementarContador();
    incrementarContador();
    ?>
</body>
</html>