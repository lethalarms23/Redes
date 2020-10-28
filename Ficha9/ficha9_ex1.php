<!DOCTYPE html>
<html>
<head>
    <title>Teste PHP</title>
</head>
<body>
<?php
$nota1 = 10;
$nota2 = 17;
$nota3 = 14;
$media = ($nota1 + $nota2 + $nota3) / 3;
if($media >= 9.5){
    echo 'Aluno aprovado';
}
elseif($media > 8 && $media < 9.5){
    echo 'Aluno vai recuperar';
}
elseif($media <= 8){
    echo 'Aluno reprovado';
}
?>
</body>
</html>