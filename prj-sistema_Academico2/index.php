<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset= UTF-8>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width , inital-scale=1.0">
    
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     
        <title>Sistema Acadêmico - Login</title>
    </head>
    <body id="menu">
    
    <img src="imagens/sistemaimg.png"> 
    
        <div id="div3">
            <p> 
                <h1> 
                    Sistema Acadêmico
                </h1>
                <br>
                <br>
                Faça seu login:
            </p>
        </div>

    <div>
       <form method="post" action="autenticaSessao.php">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Login:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite seu login" name="txtLogin">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Digite sua senha" name="txtSenha">
        </div>
        <br>
        <div id="div2">
            <button input type="submit" class="btn btn-outline-primary">Entrar</button>
        </div> 
        </form>
        
        </div> 
        

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    </body>
</html>