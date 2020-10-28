<!DOCTYPE html>
<html>
<head>
    <title>Teste PHP</title>
</head>
<body>
<?php
    $num = rand(0,100);
    $soma = 0;
    while($soma + $num < 1000){
        $soma = $soma + $num;
        $num = rand(0,100);
    }  
    echo $soma;
?>
</form>
</body>
</html>