<!DOCTYPE html>
<html>
<head>
    <title>Teste PHP</title>
</head>
<body>
<?php 
    $temperatura = 0;
    echo '<h1>A temperatura é de '.$temperatura.'º<h1>';
    if($temperatura <= 3){
        echo 'Dia gelado';
    }
    elseif($temperatura > 3 && $temperatura <= 15){
        echo 'Dia frio';
    }
    elseif ($temperatura > 15 and $temperatura<=29) {
        echo 'Dia agradável';
    }
    else {
        echo '...começa a ficar demasiado calor';
    }
?>
</body>
</html>