<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //receber dois números e calcular a soma, subtração, multiplicação, divisão e módulo

    $num1 = 10;
    $num2 = 2;

    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    $divisao = $num1 / $num2;
    $modulo = $num1 % $num2;

    echo "Soma: " . $soma . "<br>";
    echo "Subtração: " . $subtracao . "<br>";
    echo "Multiplicação: " . $multiplicacao . "<br>";
    echo "Divisão: " . $divisao . "<br>";
    echo "Módulo: " . $modulo . "<br>";
    ?>
</body>
</html>