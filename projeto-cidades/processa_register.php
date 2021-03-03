<?php
include "css.php";
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $utilizador = $_POST['username'];
        $nome = $_POST['nome'];
        $password = $_POST['password'];
        $passwordencriptada = password_hash($password, PASSWORD_DEFAULT);
        $con = new mysqli("localhost","root","","projeto_cidades");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "insert into utilizadores(username,password,nome) values(?,?,?)";
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("sss",$utilizador,$passwordencriptada,$nome);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Utilizador adicionado com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=index.php");
            }
        }
    }