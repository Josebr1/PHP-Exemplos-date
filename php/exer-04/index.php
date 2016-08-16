<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exércicio 04</title>

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
                    Exercício 04
                </td>
            </tr>
        </table>
        <p>Escreva uma função que receba duas datas e uma flag indicando se as datas estão no formato brasileiro (BR) ou
            americano (US) e imprima na tela a diferença entre as datas, no formato: "A diferença é de _dias, _horas,
            _minutos e _segundos. <br/> Para as datas "20-12-2010 12:00:00" e "23-12-2010 14:05:17 o resultado deve ser
            "A diferença é de 3 dias, 2 horas, 5 minutos e 17 segundos.</p>
    </div>

    <hr>


    <table class="container-table">
        <tr>
            <td>

                <form method="get" action="php-file.php">

                    <label for="data">Data inicial com a flag:</label>
                    <br/>
                    <label for="dataUm">Data 2016-08-16 03:28:00</label>
                    <input type='text' name='dataUm' id='dataUm' value=''/>
                    <label for="flagUm">Flag BR/US</label>
                    <input type='text' name='flagUm' id='flagUm' value=''/>

                    <br/>

                    <label for="data">Data final com a flag:</label>
                    <br/>
                    <label for="dataDois">Data 2016-08-16 03:28:00</label>
                    <input type='text' name='dataDois' id='dataDois' value=''/>
                    <label for="flagDois">Flag BR/US</label>
                    <input type='text' name='flagDois' id='flagDois' value=''/>

                    <br/>

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