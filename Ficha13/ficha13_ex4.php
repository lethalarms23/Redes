<!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    function par($num){
        if($num % 2 == 0){
            return true;
        }
        else{
            return 0;
        }
    }
    $a = par(5);
    echo "$a";
?>
</body>
</html>