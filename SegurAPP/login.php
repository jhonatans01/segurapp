<!DOCTYPE html>
<html>
    <head>
        <title>SegurApp</title>
        <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="loginform cf">
            <!--accept-charset="utf-8"-->
            <form action="ope.php" method="POST">
                <ul>
                    <li>
                        <label for="login">Login</label>
                        <input type="text" name="login" placeholder="Insira seu login" required>
                    </li>
                    <li>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Insira sua senha" required></li>
                    <li>
                        <input type="submit" name="submit" value="Login">
                        <a href="criarLogin.php">
                            <input type="button" value="Criar novo"></a>
                    </li>
                </ul>
            </form>
            <?php
            if (empty($_SESSION)) { // if the session not yet started 
                session_start();
            }


            if (isset($_SESSION['login'])) { // if already login
                header("location:index.php"); // send to home page
                exit;
            }
            ?>
        </section>
    </body>
</html>