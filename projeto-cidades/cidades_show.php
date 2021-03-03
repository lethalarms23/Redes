<?php
include "css.php";
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['cidade']) || !is_numeric($_GET['cidade'])){
                echo '<script>alert("Erro ao abrir cidade");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5;url=index.php");
                exit();
            }
            $idCidade=$_GET['cidade'];
            $con = new mysqli("localhost","root","","projeto_cidades");
    
            if($con->connect_errno!=0){
                echo '<h5 style="color:white">Occoreu um erro no acesso à base de dados.<br></h5>'.$con->connect_error;
                exit();
            }
            else{
                $sql = 'select * from cidades where id_cidade = ?';
                $stm = $con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idCidade);
                    $stm->execute();
                    $res=$stm->get_result();
                    $cidade = $res->fetch_assoc();
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
<h1 style="color: white">Detalhes do filme</h1>
<?php
    if(isset($cidade)){
        echo '<br>';
        echo "<h4 style='color: white'>Cidade: ".$cidade['cidade']."</h4>";
    }
    else{
        echo '<h2>Parece que a Cidade selecionada não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<a href="cidades_edit.php?cidade='.$cidade['id_cidade'].'">Editar Cidade</a><br>';
    echo '<a href="cidades_delete.php?cidade='.$cidade['id_cidade'].'">Eliminar Cidade</a>';
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