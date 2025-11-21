<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $texto = "Sou Ivan, estudante de analise e desenvolvimento de sistemas.";
    echo strtoupper($texto) . "<br>";
    echo strtolower($texto) . "<br>";
    echo strlen($texto) . "<br>";
    echo str_replace("análise e desenvolvimento de sistemas", "PHP", $texto);
    ?>
</body>
</html>