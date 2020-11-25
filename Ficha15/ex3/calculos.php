<?php
    if($_GET["operacao"] == "soma"){
        soma();
    }
    else if($_GET["operacao"] == "subtracao"){
        sub();
    }
    else if($_GET["operacao"] == "divisao"){
        div();
    }
    else if($_GET["operacao"] == "multiplicacao"){
        multi();
    }
    function soma(){
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $soma = $n1 + $n2;
        echo "A soma dos numeros é: ".$soma."<br>";
    };
    
    function sub(){
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $sub = $n1 - $n2;
        echo "A subtração dos números é: ".$sub."<br>";
    };

    function multi(){
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $mult = $n1 * $n2;
        echo "A multiplicação dos números é: ".$mult."<br>";
    };

    function div(){
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $div = $n1 / $n2;
        echo "A divisão dos números é: ".$div."<br>";
    }
?>