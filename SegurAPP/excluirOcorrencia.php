<?php

require_once './conexao.php';

if (!$link) {
    echo "erro ao conectar ao banco de dados!";
    exit();
} else {
    $id = $_GET['id'];
    $sql2 = "DELETE FROM ocorrencia WHERE id = $id";
    mysql_query($sql2);
    if (mysql_affected_rows() == 1) {
        echo 'Deletado com sucesso';
    } else {
        echo 'Erro ao deletar';
    }
    mysql_close();
}
?>