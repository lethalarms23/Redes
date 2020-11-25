<?php
    $num1 = $_GET["n1"];
    
    if($num1 < 18){
        echo "Você tem ".$num1." anos - É MENOR de idade.";
    }
    else if($num1 >=18 && $num1 < 100){
        echo "Você tem ".$num1." anos - É MAIOR de idade.";
    }
    else{
        echo "Você é um Dinossauro";
    }
?>