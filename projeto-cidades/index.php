<?php
    include "css.php";
    session_start();
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
    <title>Home Page</title>
</head>
<body class="bg-dark">
<table class="table table-dark table-striped">
<tr>
<?php
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        ?>
        <td style="width:1%"><span><?php echo $_SESSION['id_user'] ?></span>
        <span><a href="processa_logout.php">Logout</a></span></td>
<?php
    }
    else{
?> 
    <td style="width:1%"><span><a href="login.php">Login</a></span><br><span><a href="register.php">Register</a></span></td>
<?php      
    }
?>

<th style="text-align: center" scope="col">
    <h3>Cidades</h3>
</th>
<td style="width:8%"><span><a href="cidades_create.php">Adicionar Cidade</a></span><br><span><a href="">Adicionar Locais</a></span></td>
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
            echo '<td>';
            echo '<a href="cidades_show.php?cidade='.$resultado['id_cidade'].'">'.$resultado['cidade'];
            echo '</td>';
        }
    }
?>
</th>
</tr>
</tbody>
</table>
</body>
</html>