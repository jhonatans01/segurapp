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
                    <center>
                        <h1>Inicio</h1>
                        Bem vindo ao SegurApp!
                    </center>
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