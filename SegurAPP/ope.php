<?php

include 'conexao.php'; //connect the connection page

if (!$link) {
    echo "erro ao conectar ao banco de dados!";
    exit();
} else {
    if (empty($_SESSION)) { // if the session not yet started 
        session_start();
    }
    if (!isset($_POST['submit'])) { // if the form not yet submitted
        header("Location: login.php");
        exit;
    }
//check if the username entered is in the database.
    $login = (string) $_POST['login'];
    $senha = (string) $_POST['senha'];
    $test_query = "SELECT * FROM usuario WHERE login = '$login' AND senha='$senha'";
    $query_result = mysql_query($test_query);
    $dados = mysql_fetch_array($query_result); 
    
//conditions
    if (mysql_num_rows($query_result) > 0) {
        $_SESSION['id'] = $dados['id'];
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header("Location:index.php");
        exit;
    } else {
        echo "Usuário ou senha inválidos.";
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.php');
    }
}
?>