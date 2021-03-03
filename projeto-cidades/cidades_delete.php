<?php
include "css.php";
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['cidade']) || is_numeric($_GET['cidade'])){
        $idCidade = $_GET['cidade'];
        $con = new mysqli("localhost","root","","projeto_cidades");
        if($con->connect_errno!=0){
            echo "<h1 style='color:white'>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        else{
        $sql = "delete from cidades where id_cidade=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idCidade);
            $stm->execute();
            $stm->close();
            echo ("<script>alert('Cidade eliminada com sucesso');</script>");
            echo '<h5 style="color:white">Aguarde um momento. A reencaminar página</h5>';
            header("refresh:5; url=index.php");
        }
        else{
            echo '<br>';
            echo $con->error;
            echo '<br>';
            echo "<h5 style='color:white'>Aguarde um momento. A reencaminhar página</h5>";
            header("refresh:5; url=index.php");
        }
    }
 }
 else{
    echo ("<h1 style='color: white'>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=index.php");
    }
}
else{
    echo ("<h1 style='color: white'>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=index.php");
    }
?>