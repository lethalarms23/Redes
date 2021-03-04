<?php
include "css.php";
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['local']) || is_numeric($_GET['local'])){
        $idLocal = $_GET['local'];
        $con = new mysqli("localhost","root","","projeto_cidades");
        if($con->connect_errno!=0){
            echo "<h1 style='color:white'>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        else{
        $sql = "delete from locaislazer where id=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idLocal);
            $stm->execute();
            $stm->close();
            echo ("<script>alert('Local eliminado com sucesso');</script>");
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