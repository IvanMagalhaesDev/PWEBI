<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $bool = true;
    $int = (int) $bool;
    $str = (string) $bool;
    $float = (float) $bool;
    var_dump($int);
    var_dump($str);
    var_dump($float);
    ?>
</body>
</html>