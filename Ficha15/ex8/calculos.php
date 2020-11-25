<?php
    $num1 = $_POST["n1"];
    if($num1 > 0 ){
        if($num1 < 18){
            echo "Você tem ".$num1." anos - É MENOR de idade.";
        }
        else if($num1 >=18 && $num1 <= 100){
            echo "Você tem ".$num1." anos - É MAIOR de idade.";
        }
        else if($num1 > 100){
            echo "Você é um Dinossauro";
        }
    }
    else{
        echo "Caso Impossivel";
    } 

?>