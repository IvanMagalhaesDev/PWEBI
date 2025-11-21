<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //conversão de str para int, float, bool

    $string = "123";
    $int = (int) $string;
    $float = (float) $string;
    $bool = (bool) $string;
    var_dump($int);
    var_dump($float);
    var_dump($bool);
    ?>
</body>
</html>