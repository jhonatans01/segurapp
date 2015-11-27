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

                    NOTHING 
                </section>
            </main>

            <section class="navform cf">
                <ul>
                    <li><a id="active" href="teste.php">Inicio</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="criarLogin.php">Criar login</a></li>
                    <li><a href="infUsuario.php">Editar login</a></li>
                    <li><a href="abrirOcorrencia.php">Abrir Ocorrência</a></li>
                    <li><a href="listarOcorrencias.php">Listar ocorrências</a></li>
                    <li><a href="grafico.php">Ranking por bairro</a></li>
                </ul>
            </section>
        </div>
        
        <select name="ano" size="5" multiple>
<option value="2000">Aeroporto</option>
<option value="2001">Água Boa</option>
<option value="2002">Águas Lindas</option>
<option value="2003">Águas Negras</option>
<option value="2004">Agulha</option>
<option value="2005">Ariramba</option>
<option value="2005">Aurá</option>
<option value="2005">Bahia do Sol</option>
<option value="2005">Barreiro</option>
</select>

        <div id="footer-wrapper">
            <footer id="footer"><p>Footer...</p></footer>
        </div>

    </body>
</html>
