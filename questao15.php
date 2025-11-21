<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    class Carro {
        public $cor;
        public $modelo;

        public function __construct($cor, $modelo) {
            $this->cor = $cor;
            $this->modelo = $modelo;
        }

        public function mensagem() {
            return "Meu carro é um " . $this->modelo . " de cor " . $this->cor . ".<br>";
        }
    }

    $meuCarro = new Carro("vermelho", "Toyota");
    echo $meuCarro->mensagem();
    $meuOutroCarro = new Carro("azul", "Honda");
    echo $meuOutroCarro->mensagem();
    
    ?>
</body>
</html>