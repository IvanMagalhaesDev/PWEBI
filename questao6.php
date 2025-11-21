<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //comparação entre valores 10 e "10" usando ==, ===, !=, !==

    $valor1 = 10;
    $valor2 = "10";

    var_dump($valor1 == $valor2);
    var_dump($valor1 === $valor2);
    var_dump($valor1 != $valor2);
    var_dump($valor1 !== $valor2);
    ?>
</body>
</html>