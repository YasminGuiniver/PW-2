<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cadrastro da vacinação</title>
    </head>

    <body>
        <h3>Cadrastro da vacinação dos professores</h3>
        <form action="cadrastrarVacina.php" method="post">
            <label> Nome: </label>
            <input type= "text" name= "txtNome" id= "txtNome">
            <br>

            <label> CPF: </label>
            <input type = "text" maxlength="14" name = "txtCPF" id="txtCPF">
            <br>

            <label> Data de nascimento: </label>
            <input  type="date" name="txtData" id="txtData">
            <br>

            <label> Dose: </label>
            <input type="radio" name="rdDose" id="rdDose" value="1°"> 1°Dose
            <input type="radio" name="rdDose" id="rdDose" value="2°"> 2°Dose
            <input type="radio" name="rdDose" id="rdDose" value="3°"> 3°Dose
            <input type="radio" name="rdDose" id="rdDose" value="4°"> 4°Dose
            <br>

            <label> Escola sede: </label>
            <select name = "slEscola" id ="slEscola">
                <option value="1"> Etec de Guaianazes </option>
                <option value="2"> Prof° Maria Lucia Ambrozio </option>
                <option value="3"> Prof° Cesár Dacorso Filho </option>
                <option value="4"> Dom Pedro 1 </option>
            </select>
            <br>

            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>