<!DOCTYPE html>
<html>
<head>
    <title>Teste PHP</title>
</head>
<body>
<?php
    $num = rand(1,10);
    for($i = 1; $i <= $num;$i++){
        echo $num.'<br>';
    }
?>
</body>
</html>