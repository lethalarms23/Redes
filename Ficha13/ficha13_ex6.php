<!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    function perc($numRaparigas, $numRapazes){
        $total = $numRaparigas + $numRapazes;
        $percRapazes = ($numRapazes / $total) * 100;
        $percRaparigas = ($numRaparigas / $total) * 100;
        echo "% Raparigas: $percRaparigas<br>";
        echo "% Rapazes: $percRapazes<br>";
    }
    perc(10,13);
?>
</body>
</html>