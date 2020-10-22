<!DOCTYPE html>
<html>
<head>
    <title>Teste PHP</title>
</head>
<body>
<?php 
    $nota = 12;
    switch ($nota) {
        case ($nota < 10):
            echo 'Aluno <span style="color:#ff0000">REPROVADO</span> com '.$nota.' valores.';
        break;

        case ($nota >= 10 && $nota < 20):
            echo 'Aluno <span style="color:#00ff00">APROVADO</span> com '.$nota.' valores.';
        break;

        default:
            echo 'Nota Inválida';
    }
?>
</body>
</html>