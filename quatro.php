<!<!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
    $a = 23;
    $b = 45;
    echo $a + $b;
    echo "<br>";
    $nota1 = 15;
    $nota2 = 17;
    $nota3 = 14;
    echo ($nota1 + $nota2 + $nota3) / 3;
    echo "<br>";
    $x = 15;
    $y = 13;
    echo round($x / $y,0);
    echo "<br>";
    echo ($x % $y)/$y;
    $preco = 78;
    echo "<br>";
    echo "O preço do carro com iva é: ". ($preco + ($preco * 0.23));
    ?>
</body>
</html>