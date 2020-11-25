<?php
    $num1 = $_GET["n1"];
    
    $descontos = $num1 * 0.15;
    $cantina = $num1 * 0.10;
    $transporte = $num1 * 0.05;
    $liquido = $num1 - $descontos - $cantina -$transporte;
    echo "Salário Bruto: ".$num1."<br>";
    echo "Descontos: ".$descontos."<br>";
    echo "Cantina: ".$cantina."<br>";
    echo "Transporte: ".$transporte."<br>";
    echo "Salário Liquido: ".$liquido;
?>