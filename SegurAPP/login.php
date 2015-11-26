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

                    <h1>Login no sistema</h1>
                    <form method="post" action="ope.php">
                        <fieldset>
                            Login: <input type="text" name="login"/></br>
                            Senha: <input type="password" name="senha"/></br>
                        </fieldset>
                        <input type="submit" name="submit"/>
                    </form>
                    <?php
                    if (empty($_SESSION)) { // if the session not yet started 
                        session_start();
                    }


                    if (isset($_SESSION['login'])) { // if already login
                        header("location: index.php"); // send to home page
                        exit;
                    }
                    ?>
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

    </body>
</html>