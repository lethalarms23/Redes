<?php
    include "css.php";
    $idLocal=$_GET['local'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome = "";
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do local.");</script>';
        }

        $con = new mysqli("localhost","root","","projeto_cidades");

        if($con->connect_errno!=0){
            echo "<h5 style='color:white'>Ocorreu um erro no acesso à base de dados.<br></h5>".$con->connect_error;
            exit;
        }
        else{
            $sql = "update locaislazer set local=? where id=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("si",$nome,$idLocal);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Local alterada com sucesso!!");</script>';
                echo "<h5 style='color:white'>Aguarde um momento. A reencaminhar página</h5>";
                header("refresh:5; url=index.php");
            }
        }
    }
    else{
        echo "<h1 style='color:white'> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }