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
                    <h1>Editar ocorrência</h1>
                    <form method="post" action="editarOc_Salvar.php"
                          style="font-size: 13px">
                        <!--<fieldset>-->
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
                        <input type="text"
                               name="dAssalto"
                               name="dAssaltante"
                               placeholder="Descreva o assalto"
                               class="register-input"
                               value=
                               "<?php
                               echo $linha['descricaoAssalto'];
                               ?>"/></br>
                        <input type="text"
                               name="dAssaltante"
                               placeholder="Descreva o assaltante"
                               class="register-input"
                               value=
                               "<?php
                               echo $linha['descricaoAssaltante'];
                               ?>"/></br>
                        <input type="text"
                               name="bairro"
                               placeholder="Bairro onde ocorreu"
                               class="register-input"
                               value=
                               "<?php
                               echo $linha['bairro'];
                               ?>"/></br>
                        <div class="register-switch">
                            <input type="radio"
                                   name="classificacao" value="Roubo"
                                   id="furto" class="register-switch-input" >
                            <label for="furto" class="register-switch-label">Furto</label>
                            <input type="radio"
                                   name="classificacao" value="Furto"
                                   id="roubo" class="register-switch-input" checked>
                            <label for="roubo" class="register-switch-label">Roubo</label>
                        </div></br>
                        <input type="text"
                               name="bens"
                               placeholder="Bens levados"
                               class="register-input"
                               value=
                               "<?php
                               echo $linha['bens'];
                               ?>" /></br>
                        <!--</fieldset>-->
                        <input type="submit" value="Salvar" name="salvar"
                               class="register-button"/>

                    </form>
                </section>
            </main>

            <section class="navform cf">
                <ul>
                    <li><a id="active" href="index.php">Inicio</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="criarLogin.php">Criar login</a></li>
                    <li><a href="infUsuario.php">Editar login</a></li>
                    <li><a href="abrirOcorrencia.php">Abrir Ocorrência</a></li>
                    <li><a href="listarOcorrencias.php">Listar ocorrências</a></li>
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
