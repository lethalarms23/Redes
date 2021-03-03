<?php
include "css.php";
    $idCidade=$_GET['cidade'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $cidade = "";
        if(isset($_POST['cidade'])){
            $cidade = $_POST['cidade'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento da cidade.");</script>';
        }

        $con = new mysqli("localhost","root","","projeto_cidades");

        if($con->connect_errno!=0){
            echo "<h5 style='color:white'>Ocorreu um erro no acesso à base de dados.<br></h5>".$con->connect_error;
            exit;
        }
        else{
            $sql = "update cidades set cidade=? where id_cidade=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("si",$cidade,$idCidade);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Cidade alterada com sucesso!!");</script>';
                echo "<h5 style='color:white'>Aguarde um momento. A reencaminhar página</h5>";
                header("refresh:5; url=index.php");
            }
        }
    }
    else{
        echo "<h1 style='color:white'> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }