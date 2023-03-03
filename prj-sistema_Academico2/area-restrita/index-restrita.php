<?php include_once("validar.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset= UTF-8>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width , inital-scale=1.0">

        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        <link rel="stylesheet" type="text/css" href="../css/styleDois.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <title>Sistema Acadêmico - Restrito</title>
    </head>

    <body id="menu2">

        <div id="div1">
            <p>
                Sistema Acadêmico
            </p>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="../logout.php"> 
        <button input type="submit" class="btn btn-outline-primary">Sair</button>
        </a>
        </div>

        <div id="div2"> 
        <?php echo("Olá, ".$_SESSION['login-sessao']."<br> Cadrastro aluno");?>
        </div>
        <br>
        <br>

    <div id="div3">
       <form method="post" action="pagina2.php">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome do aluno:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite o nome" name="txtNome">
        </div>
        <br>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">CPF do aluno</label>
            <input type="tel" class="form-control" id="formGroupExampleInput2" placeholder="Digite o cpf" name="txtCpf">
        </div>
        <br>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">RG do aluno</label>
            <input type="tel" class="form-control" id="formGroupExampleInput2" placeholder="Digite o rg" name="txtRg">
        </div>
        <br>
        <select class="form-select" aria-label="Default select example" name="slClasse">
            <option selected>Selecione uma turma</option>
            <option value="1">1°DS-A</option>
            <option value="2">1°DS-B</option>
            <option value="3">2°DS-A</option>
            <option value="4">3°DS-A</option>
        </select>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end" id="div4">
        <button input type="submit" class="btn btn-outline-primary">Cadastrar</button>
        </div>
        </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </body>
</html>