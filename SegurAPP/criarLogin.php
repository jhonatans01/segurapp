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
                    <h3>Criar cadastro</h3>
                    <form method="post" action="usuario.php"
                          style="font-size: 13px">
                        <input type="text"
                               name="login"
                               required="true"
                               placeholder="Login"
                               class="register-input"/></br>
                        <input type="password"
                               name="senha"
                               required="true"
                               placeholder="Senha"
                               class="register-input"/></br>
                        
                        <legend>Dados do usuário</legend>
                        <input type="text"
                               name="nome"
                               required="true"
                               placeholder="Nome"
                               class="register-input"/></br>
                        <input type="text"
                               name="telefone"
                               required="true"
                               placeholder="Telefone"
                               class="register-input"/></br>
                        <input type="email"
                               name="email"
                               required="true"
                               placeholder="Email"
                               class="register-input"></br>
                        <input type="submit" class="register-button"
                               value="Salvar"/>
                    </form>

                </section>
            </main>

            <section class="navform cf">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a id="active" href="criarLogin.php">Criar login</a></li>
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
    </body>
</html>