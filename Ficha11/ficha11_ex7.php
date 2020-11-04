<!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    $array = array(
        array(0,0),
        array(1,0),
        array(2,0),
        array(3,0),
        array(4,0),
        array(5,1),
        array(6,1),
        array(7,1),
        array(8,1),
        array(9,1),
    );
    $soma = 0;
    $maior = max($array);
    $segundoMaior = $array[0][0];
    for ($linha=0; $linha<10; $linha++) {
        for ($coluna=0; $coluna<2; $coluna++) {
            if($segundoMaior < $array[$linha][$coluna] && $array[$linha][$coluna]<$maior){
                $segundoMaior = $array[$linha][$coluna];
            }
            $soma += $array[$linha][$coluna];
        }
    }
    echo "$soma<br>";
    echo "$segundoMaior";
?>
</body>
</html>