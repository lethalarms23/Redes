<?php
    include "css.php";
    session_start();
    $con = new mysqli("localhost","root","","filmes");
    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados ".$con->connect_error;
        exit;
    }
    else{
?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="ISO-8859-1">
    <title>Filmes</title>
    </head>
    <body>
    <h1>Lista de filmes</h1>
    <?php
        $stm = $con->prepare('select * from filmes');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="filmes_show.php?filme='.$resultado['id_filme'].'">';
            echo $resultado['titulo'];
            echo '</a>';
            echo '<br>';
        }
        $stm->close();
        echo "<br>";
        ?>
        <h1>Lista de utilizadores</h1>
        <?php
        $stm = $con->prepare('select * from utilizadores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo $resultado['user_name'];
            echo '<br>';
            if($resultado['id'] == $_SESSION['id_user']){
                echo '<a href="user_edit.php?user='.$resultado['id'].'">Editar User</a><br>';
            }
        }
        $stm->close();
        echo "<br>";
        ?>
        <h1>Lista de Atores</h1>
        <?php
        $stm = $con->prepare('select * from atores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="atores_show.php?ator='.$resultado['id_ator'].'">';
            echo $resultado['nome'];
            echo '</a>';
            echo '<br>';
        }
        $stm->close();
        echo "<br>";
        ?>
        <h1>Lista de Realizadores</h1>
        <?php
        $stm = $con->prepare('select * from realizadores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="realizador_show.php?realizador='.$resultado['id_realizador'].'">';
            echo $resultado['nome'];
            echo '</a>';
            echo '<br>';
        }
        $stm->close();
    ?>
    <br>
    <hr>
    <a href="filmes_create.php">Adicionar Filmes</a><br>
    <a href="atores_create.php">Adicionar Atores</a><br>
    <a href="realizador_create.php">Adicionar Realizadores</a><br>
    <a href="userlist.php">Listagem de utilizadores</a><br>
    <a href="atoresList.php">Listagem de autores</a><br>
    <a href="realizadoresList.php">Listagem de Realizadores</a><br>
    <a href="login.php">Login</a><br>
    <a href="register.php">Register</a><br>
<br>
</body>
</html>

<?php
    }
?>