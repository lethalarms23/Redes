<?php
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
    ?>
<br>
</body>
</html>

<?php
    }
?>