<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercício 04</title>

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
                    Exercício 04
                </td>
            </tr>
        </table>
        <p>Escreva uma função que receba duas datas e uma flag indicando se as datas estão no formato brasileiro (BR) ou
            americano (US) e imprima na tela a diferença entre as datas, no formato: "A diferença é de _dias, _horas,
            _minutos e _segundos. <br/> Para as datas "20-12-2010 12:00:00" e "23-12-2010 14:05:17 o resultado deve ser
            "A diferença é de 3 dias, 2 horas, 5 minutos e 17 segundos.</p>
    </div>

    <a onclick="return abrirPopup('code/code-php-file.php')" class="button-site">< / ><h6>Ver código</h6></a>

    <hr>


    <table class="container-table">
        <tr>
            <td>
                <?php

                function verifica_date($dateUm, $fragUm, $dateDois, $fragDois)
                {

                    if ($fragUm == "br" || $fragUm == "BR" && $fragDois == "br" || $fragDois == "BR") {
                        $intervalo = date_diff(date_create($dateDois), date_create($dateUm));
                        return "A diferença é de {$intervalo -> d} dias, {$intervalo -> h} horas, {$intervalo -> i} minutos e {$intervalo -> s} segundos";
                    } else {

                        $newDateUm = date('d-m-y H:i:s', strtotime($dateUm));
                        $newDateDois = date('d-m-y H:i:s', strtotime($dateDois));

                        $intervalo = date_diff(date_create($newDateDois), date_create($newDateUm));
                        return "A diferença é de {$intervalo -> d} dias, {$intervalo -> h} horas, {$intervalo -> i} minutos e {$intervalo -> s} segundos";
                    }
                }

                $dataUmUrl = $_GET["dataUm"];
                $flagUm = $_GET["flagUm"];

                $dataDoisUrl = $_GET["dataDois"];
                $flagDois = $_GET["flagDois"];

                echo verifica_date($dataUmUrl, $flagUm, $dataDoisUrl, $flagDois);
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