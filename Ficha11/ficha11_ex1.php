<!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body>
<?php
   $pais = "Portugal";
   $quartcaract = substr($pais, 3,2);
   $paisleng = strlen($pais);
   $paisMais = strtoupper($pais);
   echo "<h1>String Inicial: {$pais}</h1>";
   echo "<h1>Quarto e Quinto Caracter: {$quartcaract}<br></h1>"; 
   echo "<h1>Tamanho total da string: {$paisleng}</h1>";
   echo "<h1>String convertida para maisculas: $paisMais";
?>
</body>
</html>