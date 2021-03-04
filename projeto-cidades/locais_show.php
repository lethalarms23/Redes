<?php
include "css.php";
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['local']) || !is_numeric($_GET['local'])){
                echo '<script>alert("Erro ao abrir local");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5;url=index.php");
                exit();
            }
            $idLocal=$_GET['local'];
            $con = new mysqli("localhost","root","","projeto_cidades");
    
            if($con->connect_errno!=0){
                echo '<h5 style="color:white">Occoreu um erro no acesso à base de dados.<br></h5>'.$con->connect_error;
                exit();
            }
            else{
                $sql = 'select * from locaislazer where id = ?';
                $stm = $con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idLocal);
                    $stm->execute();
                    $res=$stm->get_result();
                    $local = $res->fetch_assoc();
                    $stm->close();
                }
                else{
                    echo '<br>';
                    echo ($con->error);
                    echo '<br>';
                    echo "<h5 style='color:white'>Aguarde um momento.A reencaminhar página</h5>";
                    echo '<br>';
                    header("refresh:5; url=index.php");
                }
            }
        }
        ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Detalhes</title>
</head>
<body>
<h1 style="color: white">Detalhes do Local</h1>
<?php
    if(isset($local)){
        echo '<br>';
        echo "<h4 style='color: white'>Local: ".$local['local']."</h4>";
    }
    else{
        echo '<h2>Parece que o Local selecionada não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<a href="locais_edit.php?local='.$local['id'].'">Editar Local</a><br>';
    echo '<a href="locais_delete.php?local='.$local['id'].'">Eliminar Local</a>';
?>
</body>
</html>
<?php
    }
    else{
        echo "Precisa estar logado.<br>";
        echo "A ser redirecionado para a pagina de login";
        header("refresh:5; url=login.php");
    }
?>