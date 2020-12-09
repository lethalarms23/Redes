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
            session_name('VariaveisNomeIdade');
            session_start();
            $nome = $_SESSION['Nome'];
            $idade = $_SESSION['Idade'];
            echo "Bem Vindo(a): ".$nome."<br>";
            echo "Sua idade: ".$idade."<br>";
        ?>
    </body>
</html>