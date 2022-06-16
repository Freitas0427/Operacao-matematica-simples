<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
<?php
    $calcular = isset($_GET['resultado']) ? $_GET['resultado'] : 0;
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $soma = $n1 + $n2;
    echo "Resultado das operações:<br/><br/>";
    echo "A soma de $n1 e $n2 é de : $soma <br/>";
    $subt = $n1 - $n2;
    echo "A subtração de $n1 e $n2 é de :$subt <br/>";
    $divisao = $n1 / $n2;
    echo "A divisão de $n1 por $n2 é de :$divisao <br/>";
    $multip = $n1 * $n2;
    echo "A multiplicação de $n1 por $n2  é de :$multip <br/>";
    ?>
</body>
</html>