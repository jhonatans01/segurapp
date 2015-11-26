<?php

require_once './conexao.php';

if (!$link) {
    echo "erro ao conectar ao banco de dados!";
    exit();
} else {
    session_start();
    $id = $_SESSION['id'];
    $sqlU = "DELETE FROM usuario WHERE id = $id";
    $sqlD = "DELETE FROM denunciante WHERE usuario_id = $id";
    $sqlO = "DELETE FROM ocorrencia WHERE denunciante_id = "
            . "(SELECT id FROM denunciante WHERE usuario_id = $id)";

    mysql_query($sqlO) or die(mysql_error());
    mysql_query($sqlD) or die(mysql_error());
    mysql_query($sqlU) or die(mysql_error());

    session_start();
    unset($_SESSION['login']);
    session_destroy();

    header("Location: login.php");
    exit;
}
?>