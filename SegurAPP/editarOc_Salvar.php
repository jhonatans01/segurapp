<?php

require_once './conexao.php';

if (!$link) {
    echo "erro ao conectar ao banco de dados!";
    exit();
} else {
    $dAssalto = (string) $_POST['dAssalto'];
    $dAssaltante = (string) $_POST['dAssaltante'];
    $bairro = (string) $_POST['bairro'];
    $bens = (string) $_POST['bens'];
    $classificacao = (string) $_POST['classificacao'];
    $id = $_POST['id1'];

    $sql1 = "UPDATE ocorrencia SET descricaoAssalto = '$dAssalto', "
            . "descricaoAssaltante = '$dAssaltante', "
            . "bairro = '$bairro', "
            . "classificacao = '$classificacao', "
            . "bens = '$bens' "
            . "WHERE id = $id";

    mysql_query($sql1);

    if (mysql_affected_rows() == 1) {
        echo 'Alterado com sucesso';
    } else {
        echo 'Erro ao salvar';
        echo $sql1;
    }
}
?>