<?php
    $num1 = $_GET["n1"];
    $num2= $_GET["n2"];
    $total = $num1 + $num2;
    echo "A turma tem: ".$total. " alunos<br>";

    $percRapazes = ($num1 * 100) / $total;
    echo "Percentagem de rapazes na turma: ".$percRapazes."%<br>";

    $percRaparigas = ($num2 * 100) / $total;
    echo "Percentagem de raparigas na turma: ".$percRaparigas."%<br>";
?>