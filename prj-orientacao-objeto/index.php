<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Cadastro de aluno</h1>
        <form method="post" action="cadastra-aluno.php">
            Nome: <input type="text" name="txtnome">
            <br>
            CPF: <input type="text" name="txtcpf">
            <br>
            Turma:
            <select name="slturma">
                <option value="0">Selecione</option>
                <option value="1">1º MTec A</option>
                <option value="2">1º MTec B</option>
                <option value="3">2º MTec A</option>
                <option value="4">3º MTec A</option>
            </select>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>