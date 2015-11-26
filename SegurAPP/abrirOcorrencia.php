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
                    <h1>Abrir ocorrência</h1>
                    <form method="post" action="ocorrencia.php">
                        <fieldset>
                            <legend>Insira os dados abaixo</legend>
                            Descreva o assalto: <input type="text" name="dAssalto"/></br>
                            Descreva o assaltante: <input type="text" name="dAssaltante"/></br>
                            Bairro onde ocorreu: <input type="text" name="bairro"/></br>
                            Classificação (Furto/Roubo): <input type="text" name="classificacao"/></br>
                            Bens levados: <input type="text" name="bens"/></br>
                        </fieldset>
                        <input type="submit"/>
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
