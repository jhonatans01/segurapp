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
                    <?php
                    require_once './conexao.php';

                    if (!$link) {
                        echo "erro ao conectar ao banco de dados!";
                        exit();
                    } else {
                        SESSION_START();
                        $id = $_SESSION['id'];
                        $sql = "SELECT * FROM usuario u, denunciante d "
                                . "WHERE d.usuario_id = u.id "
                                . "AND u.id = $id";
                        $dados = mysql_query($sql);
                        $linha = mysql_fetch_array($dados);
                    }
                    ?>
                    <h3>Informações do cadastro</h3>
                    <form method="post" action="editarLogin.php"
                          style="font-size: 13px">
                        <!--<fieldset>-->
                        <legend>Dados do login</legend>
                        <input type="text"
                               name="login"
                               required="true"
                               placeholder="Login"
                               class="register-input"
                               value=
                               "<?php
                               echo $linha['login'];
                               ?>"/></br>
                        <input type="password"
                               name="senha"
                               required="true"
                               placeholder="Senha"
                               class="register-input"
                               value=
                               "<?php
                               echo $linha['senha'];
                               ?>"/></br>
                        <!--</fieldset>-->

                        <!--<fieldset>-->
                        <legend>Dados do usuário</legend>
                        <input type="text"
                               name="nome"
                               required="true"
                               placeholder="Nome"
                               class="register-input"
                               value=
                               "<?php
                               echo $linha['nome'];
                               ?>"/></br>
                        <input type="text"
                               name="telefone"
                               required="true"
                               placeholder="Telefone"
                               class="register-input"
                               value=
                               "<?php
                               echo $linha['telefone'];
                               ?>"/></br>
                        <input type="email"
                               name="email"
                               required="true"
                               placeholder="Email"
                               class="register-input"
                               value=
                               "<?php
                               echo $linha['email'];
                               ?>"/></br>
                        <!--</fieldset>-->

                        <input type="submit" value="Salvar"/>
                        <a href="excluirLogin.php"
                           style="text-decoration: none;
                           color: black">
                            <input type="button" value="Deletar perfil"/>
                        </a>
                    </form>
                </section>
            </main>

            <section class="navform cf">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="criarLogin.php">Criar login</a></li>
                    <li><a id="active" href="infUsuario.php">Editar login</a></li>
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
