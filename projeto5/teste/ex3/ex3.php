<!DOCTYPE html>
<html>
    <head>
        <title>
            Projeto Módulo 5
        </title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            for($i=1;$i<=15;$i++){
                $numero = rand(1,1000);
                $vetor[$i] = $numero;
            }
            for($i=1;$i<=15;$i++){
                echo "A posição do numero: ".$vetor[$i]." é ".$i."<br>";
                if($vetor[$i] % 2 == 0){
                    echo "O numero é par"."<br>";
                }
                else{
                    echo "O número é impar <br>";
                }
            }
        ?>
    </body>
</html>