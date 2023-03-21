<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    $meses = [
        "Enero", "Febrero",
        "Marzo", "Abril",
        "Mayo", "Junio",
        "Julio", "Agosto",
        "Septiembre", "Octubre",
        "Noviembre", "Diciembre",
    ];
    ?>

    <ol>
        <?php
        foreach ($meses as $mes) {
        ?>
            <li><?= $mes; ?></li>
        <?php
        }
        ?>
    </ol>
</body>

</html>