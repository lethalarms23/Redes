<?php
    $random1 = rand(1,10);
    $random2 = rand(1,10);
    $random3 = rand(1,10);
    $random4 = rand(1,10);
    
    $num1 = $_GET["n".$random1];

    $num2= $_GET["n".$random2];

    $num3 = $_GET["n".$random3];

    $num4 = $_GET["n".$random4];
       
    echo "Os valores obtidos foram: <br>";
    echo $num1."<br>";
    echo $num2."<br>";
    echo $num3."<br>";
    echo $num4."<br>";

    $soma = $num1 + $num2 + $num3 + $num4;
    echo "A soma dos valores é: ".$soma."<br>";

    $media = $soma / 4;
    echo "A média dos valores é: ".$media."<br>";
?>