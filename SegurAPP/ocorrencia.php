<?php

require_once './conexao.php';

if (!$link) {
    echo "erro ao conectar ao banco de dados!";
    exit();
} else {

    $dAssalto = (string) $_POST['dAssalto'];
    $dAssaltante = (string) $_POST['dAssaltante'];
    $bairro = (string) $_POST['bairro'];
    $classificacao = (string) $_POST['classificacao'];
    $bens = (string) $_POST['bens'];

    SESSION_START();
    $id = $_SESSION['id'];

    $queryU = "SELECT id FROM denunciante WHERE usuario_id = '$id'";
    $dadosU = mysql_query($queryU);
    $linha = mysql_fetch_assoc($dadosU);

    $denunciante_id = $linha['id'];

    if ($denunciante_id <> NULL) {
        $queryO = "INSERT INTO ocorrencia (denunciante_id, descricaoAssalto, "
                . "descricaoAssaltante, bairro, classificacao, bens) "
                . "VALUES ('$denunciante_id','$dAssalto', '$dAssaltante', "
                . "'$bairro', '$classificacao', '$bens')";


        mysql_query($queryO) or die("Erro ao cadastrar");

        echo 'Ocorrência cadastrada com sucesso';
    }
}
?>

