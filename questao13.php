<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $mensagem = "Olá, Mundo!";
    echo $mensagem . "<br>";

    $local = function() {
        $mensagem = "Olá do escopo local!";
        echo $mensagem . "<br>";
    };
    ?>
</body>
</html>