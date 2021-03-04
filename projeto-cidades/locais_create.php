<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $idcidade="";
        $nome = "";
        $numordem = "";

        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do titulo.");</script>';
        }

        if(isset($_POST['idcidade'])){
            $idcidade = $_POST['idcidade'];
        }

        if(isset($_POST['numordem'])){
            $numordem = $_POST['numordem'];
        }

        $con = new mysqli("localhost","root","","projeto_cidades");

        if($con->connect_errno!=0){
            echo "<h1 style='color: white'>Ocorreu um erro no acesso à base de dados.<br></h1>".$con->connect_error;
            exit;
        }

        else{
            $sql = 'insert into locaislazer(local,id_cidade, numordem) values(?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('sii',$nome,$idcidade,$numordem);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Local adicionado com sucesso");</script>';
                echo '<h1 style="color: white">Aguarde um momento. A reencaminhar página</h1>';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "<h1 style='color: white'>Aguarde um momento. A reencaminhar página</h1>";
                header("refresh:5;url=index.php");
            }

            $sql = "Select * from cidades";
            $stm = $con->prepare($sql);
    
            if($stm!=false){
                $stm->execute();
                $res=$stm->get_result();
                $cidade = $res->fetch_assoc();
                $stm->close();
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Adicionar Local</title>
</head>
<body>
<h1 style="color: white; text-align: center">Adicionar Local</h1>
<table class="table table-dark table-striped">
<tbody>
<tr>
<form action="locais_create.php" method="post">
<td>
<?php
    $con = new mysqli("localhost","root","","projeto_cidades");
    $stm = $con->prepare('select * from cidades');
    $stm->execute();
    $res=$stm->get_result();
    if($stm!=false){
        echo 'Cidades';
        echo '<select name="idcidade">';
        while($resultado = $res->fetch_assoc()){
            echo '<option value="'.$resultado['id_cidade'].'">'.$resultado['cidade'].'</option>';
        }
        echo '</select>';
    }
?>
</td>
<td>
<label style="color: white">Nome</label><input type="text" name="nome" required>
</td>
<td>
<label style="color: white">Numero Ordem</label><input type="text" name="numordem" required>
</td>
<td>
<input type="submit" name="enviar"><br>
</form>
</td>
</tr>
</tbody>
</table>
</body>
</html>
<?php
    };
?>