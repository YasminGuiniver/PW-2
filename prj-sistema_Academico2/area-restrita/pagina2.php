<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset= UTF-8>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width , inital-scale=1.0">

        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        <link rel="stylesheet" type="text/css" href="../css/styleTres.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <title>Login - Restrita</title>
    </head>
    <body id="menu3">
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

        <div id = "div2"> 
            <?php  

            $vetor = array (
                'Nome' => $_POST['txtNome'],
                'Cpf' => $_POST['txtCpf'],
                'Rg' => $_POST['txtRg'],
                'Classe' => $_POST['slClasse']
            );

            if (($vetor["Nome"] == "Yasmin") || ($vetor["Nome"] == "Ellen")) {
              echo ("O (A) aluno (a) " .$vetor['Nome']. " possui os seguintes dados <br> CPF:" .$vetor['Cpf']. " <br> RG:" .$vetor['Rg']. "<br> e vai ser matriculado na classe " .$vetor['Classe']. "<br> Cadastro feito com sucesso");

            $data = getdate();
            $hora = getdate();

            echo ("<br>" . $data["mday"]. "/".$data["mon"]. "/" .$data["year"]);
            echo("<br>");
            echo ("Horario:".$hora["hours"]. ":" .$hora["minutes"]. ":" .$hora["seconds"]);
            } else {
              echo("Não foi possvél efetuar o cadastro, tente novamente mais tarde.");

              $data = getdate();
              $hora = getdate();
  
              echo ("<br>" . $data["mday"]. "/".$data["mon"]. "/" .$data["year"]);
              echo("<br>");
              echo ("Horario:".$hora["hour"]. ":" .$hora["minutes"]. ":" .$hora["seconds"]);
            }




            
            //print_r ($vetor);
            
            ?>
        </div>
        <br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="index-restrita.php"> 
        <button input type="submit" class="btn btn-outline-primary">Voltar</button>
        </a>
        </div>

        </div>
</body>