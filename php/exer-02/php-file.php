<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercício 02</title>

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
                    Exercício 02
                </td>
            </tr>
        </table>
        <p>Escreva uma função que recebe uma data no formato americano (y-m-d H:i:s) e converta para o formato
            brasileiro (d-m-y H:i:s).<br/> Para a String "2010-12-31 12:00:00" o resultado deve ser "31-12-2010 12:00:00".</p>
    </div>

    <a onclick="return abrirPopup('code/code-php-file.php')" class="button-site">< / ><h6>Ver código</h6></a>

    <hr>


    <table class="container-table">
        <tr>
            <td>
                <?php

                function date_us($date){

                    $newDate = date('d-m-y H:i:s', strtotime($date));

                    return $newDate;
                }


                $dataUrl = $_GET["data"];

                $return = date_us($dataUrl);

                echo $return;

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