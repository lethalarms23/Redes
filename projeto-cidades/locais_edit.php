<?php
include "css.php";
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['local']) && is_numeric($_GET['local'])){
        $idLocal = $_GET['local'];
        $con = new mysqli("localhost","root","","projeto_cidades");

        if($con->connect_errno!=0){
            echo "<h1 style='color: white'>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from locaislazer where id=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idLocal);
            $stm->execute();
            $res=$stm->get_result();
            $local = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar Local</title>
</head>
<body>
<h1 style="color: white; text-align: center">Editar Local</h1>
<table class="table table-dark table-striped">
<tbody>
<tr>
<form action="locais_update.php?local=<?php echo $local['id']; ?>" method="post">
<td>
<label style="color: white">Local</label><input type="text" name="nome" required value="<?php echo $local['local'];?>">
</td>
<td>
<input type="submit" name="enviar"><br>
</form>
</td>
</tr>
</tbody>
</table>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=index.php");
 }
}
?>