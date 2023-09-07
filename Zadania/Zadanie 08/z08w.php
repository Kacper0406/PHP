<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 08 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $sek = $_POST['val-1'] % 60;
        $min = floor( ($_POST['val-1'] % 3600) / 60 );
        $h = floor($_POST['val-1'] / 3600);
        echo "<h2>$h g $min m $sek s";
    ?>
</section>
</body>
</html>