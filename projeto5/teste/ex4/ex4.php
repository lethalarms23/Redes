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
            $produto = 1;
            $soma = 0;
            for($i=1;$i<=20;$i++){
                $numero = rand(1,10000);
                $vetor[$i] = $numero;
            }
            echo "O maior numero é: ".max($vetor)."<br>";
            echo "O menor numero é: ".min($vetor)."<br>";
            for($i=1;$i<=20;$i++){
                $produto = $produto * $vetor[$i];
                $soma = $soma + $vetor[$i];
            }
            $media = $soma / 20;
            echo "A media dos numeros é : ".$media."<br>";
            echo "O produto dos numeros é: ".$produto."<br>";
        ?>
    </body>
</html>