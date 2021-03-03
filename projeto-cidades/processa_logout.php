<?php
include "css.php";
    session_start();
    $_SESSION['login']="incorreto";
    echo '<script>alert("Retornando á pagina principal");</script>';
    header("refresh:5; url=index.php");