<?php include_once("validador.php");?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset= UTF-8>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width , inital-scale=1.0">
        <title>Login - Restrita</title>
    </head>
    <body>
        <h1>Você acessou a área restrita</h1>
        <h2> <?php echo("Olá, ".$_SESSION['login-sessao']); ?></h2>
        <br> <br>
        <a href="pagina2.php">Pagina 2 do site</a>
        <br> <br>
        <a href=".../logout.php"> Sair </a>
    </body>
</html>