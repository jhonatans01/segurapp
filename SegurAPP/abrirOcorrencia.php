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

                    <h1>Abrir ocorrência</h1>
                    <form  method="post" action="ocorrencia.php" style="font-size: 13px">
                        <!--<fieldset>-->
                        <legend>Insira os dados abaixo</legend>
                        <input placeholder="Descreva o assalto"
                               class="register-input"
                               type="text" name="dAssalto"/></br>
                        <input class="register-input"
                               type="text"  name="dAssaltante"
                               placeholder="Descreva o assaltante"/></br>


                        <p>
                            <span style="color: grey">Bairro onde ocorreu</span>
                            <select name="bairro">
                                <option value="Aeroporto">Aeroporto</option>
                                <option value="Água Boa">Água Boa</option>
                                <option value="Águas Lindas">Águas Lindas</option>
                                <option value="Águas Negras">Águas Negras</option>
                                <option value="Agulha">Agulha</option>
                                <option value="Ariramba">Ariramba</option>
                                <option value="Aurá">Aurá</option>
                                <option value="Baía do Sol">Baía do Sol</option>
                                <option value="Barreiro">Barreiro</option>
                                <option value="Barreiro">Barreiro</option>
                                <option value="Batista Campos">Batista Campos</option>
                                <option value="Benguí">Benguí</option>
                                <option value="Bonfim">Bonfim</option>
                                <option value="Brasília">Brasília</option>
                                <option value="Cabanagem">Cabanagem</option>
                                <option value="Campina">Campina</option>
                                <option value="Campina de Icoaraci">Campina de Icoaraci</option>
                                <option value="Canudos">Canudos</option>
                                <option value="Carananduba">Carananduba</option>
                                <option value="Caruara">Caruara</option>
                                <option value="Castanheira">Castanheira</option>
                                <option value="Chapéu-Virado">Chapéu-Virado</option>
                                <option value="Cidade Velha">Cidade Velha</option>
                                <option value="Condor">Condor</option>
                                <option value="Coqueiro">Coqueiro</option>
                                <option value="Cotijuba">Cotijuba</option>
                                <option value="Cremação">Cremação</option>
                                <option value="Cruzeiro">Cruzeiro</option>
                                <option value="Curió-Utinga">Curió-Utinga</option>
                                <option value="Farol">Farol</option>
                                <option value="Fátima">Fátima</option>
                                <option value="Guamá">Guamá</option>
                                <option value="Guanabara">Guanabara</option>
                                <option value="Icoaraci">Icoaraci</option>
                                <option value="Itaiteua">Itaiteua</option>
                                <option value="Jurunas">Jurunas</option>
                                <option value="Mangueirão">Mangueirão</option>
                                <option value="Mangueiras">Mangueiras</option>
                                <option value="Maracacuera">Maracacuera</option>
                                <option value="Maracajá">Maracajá</option>
                                <option value="Maracangalha">Maracangalha</option>
                                <option value="Marahú">Marahú</option>
                                <option value="Marambaia">Marambaia</option>
                                <option value="Marco">Marco</option>
                                <option value="Miramar">Miramar</option>
                                <option value="Mosqueiro">Mosqueiro</option>
                                <option value="Murubira">Murubira</option>
                                <option value="Natal do Muribira">Natal do Muribira</option>
                                <option value="Nazaré">Nazaré</option>
                                <option value="Outeiro">Outeiro</option>
                                <option value="Paracuri">Paracuri</option>
                                <option value="Paraíso">Paraíso</option>
                                <option value="Parque Guajará">Parque Guajará</option>
                                <option value="Parque Verde">Parque Verde</option>
                                <option value="Pedreira">Pedreira</option>
                                <option value="Ponta Grossa">Ponta Grossa</option>
                                <option value="Porto Arthur">Porto Arthur</option>
                                <option value="Praia Grande">Praia Grande</option>
                                <option value="Pratinha">Pratinha</option>
                                <option value="Reduto">Reduto</option>
                                <option value="Sacramenta">Sacramenta</option>
                                <option value="São Brás">São Brás</option>
                                <option value="São Clementeo">São Clemente</option>
                                <option value="São Francisco">São Francisco</option>
                                <option value="São João do Outeiro">São João do Outeiro</option>
                                <option value="Souza">Souza</option>
                                <option value="Sucurijuquara">Sucurijuquara</option>
                                <option value="Tapanã">Tapanã</option>
                                <option value="Telégrafo">Telégrafo</option>
                                <option value="Tenoné">Tenoné</option>
                                <option value="Terra Firme">Terra Firme</option>
                                <option value="Umarizal">Umarizal</option>
                                <option value="Una">Una</option>
                                <option value="Universitário">Universitário</option>
                                <option value="Val-de-Cães">Val-de-Cães</option>
                                <option value="Vila">Vila</option>
                            </select>
                        </p>

<!--                        <input class="register-input"
       type="text" name="bairro"
       placeholder="Bairro onde ocorreu"/></br>-->
  <!--Classificação (Furto/Roubo): <input type="text" name="classificacao"/>-->
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
                        <input class="register-input"
                               type="text" name="bens"
                               placeholder="Bens levados"/></br>
                        <!--</fieldset>-->
                        <input type="submit" value="Salvar"
                               class="register-button"/>
                    </form>
                </section>
                </article>
            </main>

            <section class="navform cf">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="criarLogin.php">Criar login</a></li>
                    <li><a href="infUsuario.php">Editar login</a></li>
                    <li><a id="active" href="abrirOcorrencia.php">Abrir Ocorrência</a></li>
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