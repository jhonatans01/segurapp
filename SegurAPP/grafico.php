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
                <center>
                    <article>

                        <p>Ranking das denúncias por bairro</p>
                        <p><img src="grafico-pie.php" title="grafico" /></p>
                        <p>&nbsp;</p>

                    </article>
                </center>
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
