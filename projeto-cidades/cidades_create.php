<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $cidade="";
    

        if(isset($_POST['cidade'])){
            $cidade = $_POST['cidade'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do titulo.");</script>';
        }

        $con = new mysqli("localhost","root","","projeto_cidades");

        if($con->connect_errno!=0){
            echo "<h1 style='color: white'>Ocorreu um erro no acesso à base de dados.<br></h1>".$con->connect_error;
            exit;
        }

        else{
            $sql = 'insert into cidades(cidade) values(?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('s',$cidade);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("Cidades adicionado com sucesso");</script>';
                echo '<h1 style="color: white">Aguarde um momento. A reencaminhar página</h1>';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "<h1 style='color: white'>Aguarde um momento. A reencaminhar página</h1>";
                header("refresh:5;url=index.php");
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Adicionar Cidades</title>
</head>
<body>
<h1 style="color: white; text-align: center">Adicionar Cidades</h1>
<table class="table table-dark table-striped">
<tbody>
<tr>
<form action="cidades_create.php" method="post">
<td>
<label style="color: white">Cidade</label><input type="text" name="cidade" required>
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