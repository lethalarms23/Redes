<!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    $a = array("a"=>"maçã","b"=>"banana");
    $b = array("a"=>"kiwi","b"=>"ananás","c"=>"morango");
    echo "<h1>Array A: <br></h1>";
    print_r($a);
    echo "<br>";
    echo "<h1>Array B: <br></h1>";
    print_r($b);
    echo "<br>";
    $arrayUnida = array_merge($a,$b);
    echo "<h1>Array A e B Unidas: <br></h1>";
    print_r($arrayUnida);
    echo "<br>";
    $arrayUnida = array_merge($b,$a);
    echo "<h1>Array B e A Unidas: <br></h1>";
    print_r($arrayUnida);
?>
</body>
</html>