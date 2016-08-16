<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercício 03</title>

    <link href="../../imgs/code.png" rel="shortcut icon" type="image/x-icon">

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
                    Exercício 03
                </td>
            </tr>
        </table>
        <p>Escreva uma função que receba uma data no formato americano e retorne um array, contendo em suas 6 primeiras
            posições as informações de ano, mês, dia, hora, minuto e segundo respectivamente.</p>
    </div>

    <a onclick="return abrirPopup('code/code-php-file.php')" class="button-site">< / ><h6>Ver código</h6></a>

    <hr>


    <table class="container-table">
        <tr>
            <td>
                <?php

                function array_date($date)
                {

                    $arrayData = array("Ano: " => date('y', strtotime($date)), "Mês: " => date('m', strtotime($date)),
                        "Dia: " => date('d', strtotime($date)), "Horas: " => date('H', strtotime($date)),
                        "Minutos: " => date('i', strtotime($date)), "Segundos: " => date('s', strtotime($date)));

                    return $arrayData;
                }


                $dataUrl = $_GET["data"];

                $return = array_date($dataUrl);

                print_r($return);

                ?>
            </td>
        </tr>
    </table>


</div>

<footer>
    <p align="center"><b>© Copyright 2016 - TPI</b></p>
</footer>


</body>
</html>