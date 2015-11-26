<?php

require_once './conexao.php';

if (!$link) {
    echo "erro ao conectar ao banco de dados!";
    exit();
} else {
    session_start();

    $id = $_SESSION['id'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sqlU = "UPDATE usuario SET login = '$login', "
            . "senha = '$senha' WHERE id = $id";

    mysql_query($sqlU) or die("Login já existente. Escolha outro");

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    $sqlD = "UPDATE denunciante SET "
            . "nome = '$nome', "
            . "telefone = '$telefone', "
            . "email = '$email' "
            . "WHERE usuario_id = $id";
    mysql_query($sqlD) or die("Erro ao salvar alterações");

    echo 'Alterado com sucesso';
}
?>

