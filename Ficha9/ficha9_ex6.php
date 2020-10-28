<!DOCTYPE html>
<html>
<head>
    <title>Teste PHP</title>
</head>
<body>
<?php
    $num = rand(0,50);
    while($num != 37){
       echo $num.'<br>';
       $num = rand(0,50);
    }  
    echo $num;
?>
</form>
</body>
</html>