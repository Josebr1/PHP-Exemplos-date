<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exércicio 05</title>

    <link href="../../css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/button.css" rel="stylesheet" type="text/css"/>

    <script src="../../js/js.js" type="text/javascript"></script>

</head>

<body>

<div class="linha-header"></div>

<header>
    <h1 align="center" class="text-logo"><a href="../../index.php"><img src="../../imgs/logo-header.png"></a></h1>
</header>


<div class="container">
    <div class="div-developer">
        <table>
            <tr>
                <td>
                    <h6 align="left"><img src="../../imgs/icone-dev.png" style="width: 50%"></h6>
                </td>
                <td>
                    Exercício 05
                </td>
            </tr>
        </table>
        <p>Escreva uma função que receba uma data no formato americano e informe se é uma data e hora válida ou não,
            retornando um valor boleano para isto.</p>
    </div>

    <hr>


    <table class="container-table">
        <tr>
            <td>

                <form method="get" action="php-file.php">

                    <label for="data">Data no formato americano (y-m-d H:m:s): </label>
                    <br/>
                    <p>Exemplo: 2016-08-16 03:28:00</p>
                    <input type='text' name='data' id='data' value=''/>

                    <input type="submit" class="button-site" value="Enviar">

                </form>
            </td>
        </tr>
    </table>

</div>

<footer>
    <p align="center"><b>© Copyright 2016 - TPI</b></p>
</footer>


</body>
</html>