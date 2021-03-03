<?php
include "css.php";
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['cidade']) && is_numeric($_GET['cidade'])){
        $idCidade = $_GET['cidade'];
        $con = new mysqli("localhost","root","","projeto_cidades");

        if($con->connect_errno!=0){
            echo "<h1 style='color: white'>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from cidades where id_cidade=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idCidade);
            $stm->execute();
            $res=$stm->get_result();
            $cidade = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar Cidade</title>
</head>
<body>
<h1 style="color: white; text-align: center">Editar Cidades</h1>
<table class="table table-dark table-striped">
<tbody>
<tr>
<form action="cidades_update.php?cidade=<?php echo $cidade['id_cidade']; ?>" method="post">
<td>
<label style="color: white">Cidade</label><input type="text" name="cidade" required value="<?php echo $cidade['cidade'];?>">
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