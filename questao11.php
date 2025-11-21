<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $alunos = array(
        "João" => array("Matemática" => 8, "Português" => 7),
        "Maria" => array("Matemática" => 9, "Português" => 6),
        "Pedro" => array("Matemática" => 7, "Português" => 8)
    );

    echo "Nota de Matemática do João: " . $alunos["João"]["Matemática"] . "<br>";
echo "Nota de Português da Maria: " . $alunos["Maria"]["Português"] . "<br>";
echo "Nota de Matemática do Pedro: " . $alunos["Pedro"]["Matemática"] . "<br>";

    ?>
</body>
</html>