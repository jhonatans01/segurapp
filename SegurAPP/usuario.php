<?php

require_once 'conexao.php';

if (!$link) {
    echo "erro ao conectar ao banco de dados!";
    exit();
} else {
    $login = (string) $_POST['login'];
    $senha = (string) $_POST['senha'];
    $nome = (string) $_POST['nome'];
    $telefone = (string) $_POST['telefone'];
    $email = (string) $_POST['email'];
    if ($nome == '' || $telefone == '' || $email == '' || $login == '' || $senha == '') {
        echo "alert('Preencha todos os campos')";
    } else {

        $queryU = "INSERT INTO usuario (login, senha) "
                . "VALUES ('$login', '$senha')";

        mysql_query($queryU) or die("Usuário já existente");
        
        $sqlId = "SELECT * FROM usuario WHERE login = '$login'";
        $dados = mysql_query($sqlId);
        $linha = mysql_fetch_array($dados);
        $id = $linha['id'];

        $queryD = "INSERT INTO denunciante (nome, telefone, email, usuario_id)"
                . "VALUES ('$nome', '$telefone', '$email', '$id')";

        mysql_query($queryD) or die("Erro ao cadastrar");

        if (mysql_affected_rows() > 0) {
            echo 'Cadastrado com sucesso';
        }
    }

    mysql_close();
}
?>