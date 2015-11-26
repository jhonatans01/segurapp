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
        <title>3 Column Layout</title>
        <link rel="stylesheet" href="styles.css"/>

    </head>

    <body>

        <header id="header"><p>SegurApp</p></header>

        <div id="container">

            <main id="center" class="column">
                <article>
                    <h1>Editar ocorrência</h1>
                    <form method="post" action="editarOc_Salvar.php">
                        <fieldset>
                            <?php
                            require_once './conexao.php';
                            if (!$link) {
                                echo "erro ao conectar ao banco de dados!";
                                exit();
                            } else {
                                $id = $_GET['id'];

                                $sql = "SELECT * FROM ocorrencia WHERE id = $id";

                                $dados = mysql_query($sql);

                                $linha = mysql_fetch_array($dados);
                            }
                            ?>
                            <legend>Insira os dados abaixo</legend>

                            <input type="text"
                                   name="id1"
                                   hidden="true"
                                   value=
                                   "<?php
                                   echo $id;
                                   ?>" />
                            Descreva o assalto: <input type="text"
                                                       name="dAssalto"
                                                       value=
                                                       "<?php
                                                       echo $linha['descricaoAssalto'];
                                                       ?>"/></br>
                            Descreva o assaltante: <input type="text"
                                                          name="dAssaltante"
                                                          value=
                                                          "<?php
                                                          echo $linha['descricaoAssaltante'];
                                                          ?>"/></br>
                            Bairro onde ocorreu: <input type="text"
                                                        name="bairro"
                                                        value=
                                                        "<?php
                                                        echo $linha['bairro'];
                                                        ?>"/></br>
                            Classificação (Furto/Roubo): <input type="text"
                                                                name="classificacao"
                                                                value=
                                                                "<?php
                                                                echo $linha['classificacao'];
                                                                ?>"/></br>
                            Bens levados: <input type="text"
                                                 name="bens"
                                                 value=
                                                 "<?php
                                                 echo $linha['bens'];
                                                 ?>"/></br>
                        </fieldset>
                        <input type="submit" value="Salvar" name="salvar"/>

                    </form>
                </article>								
            </main>

            <nav id="left" class="column">
                <h3>Painel</h3>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="criarLogin.php">Criar login</a></li>
                    <li><a href="infUsuario.php">Editar login</a></li>
                    <li><a href="abrirOcorrencia.php">Abrir Ocorrência</a></li>
                    <li><a href="listarOcorrencias.php">Listar ocorrências</a></li>
                    <li><a href="grafico.php">Ranking por bairro</a></li>
                </ul>
            </nav>
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
