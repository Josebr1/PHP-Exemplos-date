<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercício 05</title>

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
                    Exercício 05
                </td>
            </tr>
        </table>
        <p>Escreva uma função que receba uma data no formato americano e informe se é uma data e hora válida ou não,
            retornando um valor boleano para isto.</p>
    </div>

    <a onclick="return abrirPopup('code/code-php-file.php')" class="button-site">< / ><h6>Ver código</h6></a>

    <hr>


    <table class="container-table">
        <tr>
            <td>
                <?php
                function validate_date($date)
                {
                    $format = 'Y-m-d';
                    $d = DateTime::createFromFormat($format, $date);
                    $return = $d && $d->format($format) == $date;

                    if($return == 1){
                        echo "Verdadeiro";
                    }else{
                        echo "Falso";
                    }
                }

                $dataUrl = $_GET["data"];

                validate_date($dataUrl);
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