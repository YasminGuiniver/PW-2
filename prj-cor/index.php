<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Trocando de cor - Usando COOKIE</title>
</head>

<?php
    //isset (verifica se existe uma variável)
    //empty (verifica se a variável está nula, ou seja se tem conteúdo)
    //true | false
    //$cookie = $_COOKIE['corCookie'];

    if (isset($_COOKIE['corCookie'])){
    //isset verifica se existe
    //true (existe)/false (não existe)
        $cor = $_COOKIE['corCookie'];
        echo("<body bgcolor=".$cor.">");
    }
    else {
        echo("<body bgcolor='#000'>");
    }
?> 

        <!--Formulario para verificar a cor que o usuario deseja.-->
        <form id="form1" name="form1" method="post" action="cor.php" id="txt1">
            <label>Selecione a cor:</label>
              <select name="corSelect">
                <option value="#d3d3d3">Cinza Claro</option>
                <option value="#0000FF">Azul</option>
                <option value="#00FFFF">Ciano</option>
                <option value="pink">Rosa</option>
              </select>
              <br />

            <input type="submit" name="Submit" value="Aplicar" id="bt1"/>
        </form>

</body>

</html>