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

    $maior = 0;
    $soma = 0;
    $segundoMaior = $array[0][0];

    foreach ($array as $val){
	foreach($val as $key=>$val1){
		if ($val1 > $maior)
	 	    {
                $maior = $val1;
    	    }
	    }   	
    }

    for ($linha=0; $linha<10; $linha++) {
        for ($coluna=0; $coluna<2; $coluna++) {
            if($segundoMaior < $array[$linha][$coluna] && $array[$linha][$coluna]<$maior){
                $segundoMaior = $array[$linha][$coluna];
            }
            $soma += $array[$linha][$coluna];
        }
    }

    echo "Maior: $maior<br>";
    echo "Soma: $soma<br>";
    echo "Segundo maior: $segundoMaior";
?>
</body>
</html>