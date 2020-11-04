<!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body>
<?php
   $frase = "Estou a aprender PHP na secundária";
   echo "<h1>String inicial: $frase <br></h1>";
   $fraseNova = str_replace($frase, "Estou a aprender PHP na escola",$frase);
   echo "<h1>String modificada: $fraseNova</h1>";
?>
</body>
</html>