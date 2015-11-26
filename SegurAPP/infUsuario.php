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
                    <h1>Informações do cadastro</h1>
                    <form method="post" action="editarLogin.php">
                        <fieldset>
                            <legend>Dados do login</legend>
                            Login: <input type="text"
                                          name="login"
                                          required="true"
                                          value=
                                          "<?php
                                          echo $linha['login'];
                                          ?>"/></br>
                            Senha: <input type="password"
                                          name="senha"
                                          required="true"
                                          value=
                                          "<?php
                                          echo $linha['senha'];
                                          ?>"/></br>
                        </fieldset>

                        <fieldset>
                            <legend>Dados do usuário</legend>
                            Nome: <input type="text"
                                         name="nome"
                                         required="true"
                                         value=
                                         "<?php
                                         echo $linha['nome'];
                                         ?>"/></br>
                            Telefone: <input type="text"
                                             name="telefone"
                                             required="true"
                                             value=
                                             "<?php
                                             echo $linha['telefone'];
                                             ?>"/></br>
                            Email: <input type="text"
                                          name="email"
                                          required="true"
                                          value=
                                          "<?php
                                          echo $linha['email'];
                                          ?>"/></br>
                        </fieldset>

                        <input type="submit" value="Salvar"/>
                        <a href="excluirLogin.php">Deletar perfil</a>
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
