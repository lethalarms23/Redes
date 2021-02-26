<?php
    include "css.php";
    $con = new mysqli("localhost","root","","projeto_cidades");
    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados ".$con->connect_error;
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
</head>
<body class="bg-dark">
<table class="table table-dark table-striped">
<tr>
<td style="width:1%"><span>Login</span><br><span>Register</span></td>
<th style="text-align: center" scope="col">
    <h3>Cidades</h3>
</th>
</tr>
<tbody>
<tr>
<th>
<?php
    $stm = $con->prepare('select * from cidades');
    $stm->execute();
    $res=$stm->get_result();
    if($stm!=false){
        while($resultado = $res->fetch_assoc()){
            echo '<a href="#.php?#='.$resultado['id_cidade'].'">'.$resultado['cidade'];
    
        }
    }
?>
</th>
</tr>
</tbody>
</table>
</body>
</html>