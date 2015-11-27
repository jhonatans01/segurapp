<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SegurApp</title>
        <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="style.css"/>

    </head>

    <body>

        <header>
            <section class="sectionTop"><p>SegurApp</p></section>
        </header>
        <div id="container">

            <main id="center" class="column">
                <section class="sectionBody">
                    <h3>Lista de ocorrências</h3>
                    <?php
                    require_once './conexao.php';

                    if (!$link) {
                        echo "erro ao conectar ao banco de dados!";
                        exit();
                    } else {
                        session_start();
                        $id = $_SESSION['id'];
                        if ($id <> NULL) {
                            $sql = "SELECT * "
                                    . "FROM ocorrencia WHERE denunciante_id = "
                                    . "(SELECT id FROM denunciante "
                                    . "WHERE usuario_id = '$id')";

                            $dados = mysql_query($sql);

                            echo '<table cellpadding="0" cellspacing="0" id="mytable">';
                            echo '<tr><th>Desc. Assalto</th><th>Desc. Assaltante</th>'
                            . '<th>Bairro</th><th>Classificação</th>'
                            . '<th>Bens</th><th>Operações</th></tr>';
                            while ($linha = mysql_fetch_array($dados)) {
                                $id = $linha['id'];
                                echo '<tr>';
                                echo "<tr><td>" . $linha['descricaoAssalto'] . "</td><td>"
                                . $linha['descricaoAssaltante'] . "</td><td>"
                                . $linha['bairro'] . "</td><td>"
                                . $linha['classificacao'] . "</td><td>"
                                . $linha['bens'] . "</td><td>"
                                . "<a href=\"editarOcorrencia.php?id=$id\""
                                . " style=\"text-decoration: none;"
                                . "color: black\">"
                                . "<input type='button' value='Editar' /></a>"
                                . "<a href=\"excluirOcorrencia.php?id=$id\""
                                . " style=\"text-decoration: none;"
                                . "color: black\">"
                                . "<input type='button' value='Excluir' /></a></td></tr>";


                                echo '</tr>';
                            }
                            echo '</table><br />';
                        }
                    }
                    ?>
                </section>
            </main>

            <section class="navform cf">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="criarLogin.php">Criar login</a></li>
                    <li><a href="infUsuario.php">Editar login</a></li>
                    <li><a href="abrirOcorrencia.php">Abrir Ocorrência</a></li>
                    <li><a id="active" href="listarOcorrencias.php">Listar ocorrências</a></li>
                    <li><a href="grafico.php">Ranking por bairro</a></li>
                </ul>
            </section>
        </div>

        <div id="footer-wrapper">
            <footer id="footer"><p>UFRA - ICIBE</p></footer>
        </div>
        <?php
        include './conexao.php'; //connect the connection page

        if (empty($_SESSION)) { // if the session not yet started 
            session_start();
        }

        if (!isset($_SESSION['login'])) { //if not yet logged in
            header("Location: login.php"); // send to login page
            exit;
        }
        ?>
    </body>
</html>