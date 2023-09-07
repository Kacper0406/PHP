<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 02 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $val1 = $_POST['val-1'];
        $val2 = $_POST['val-2'];
        $val3 = $_POST['val-3'];
        $val4 = $_POST['val-4'];

        $wynik = ($val1 + $val2 + $val3 + $val4) / 4;
        $rounded = round($wynik);

        echo "<h3>a: $val1</h3>";
        echo "<h3>b: $val2</h3>";
        echo "<h3>c: $val3</h3>";
        echo "<h3>d: $val4</h3>";
        echo "<h2><b>Średnia: $wynik<b></h2>";
        echo "<h2><b>Średnia zaokrąglona: $rounded<b></h2>";
    ?>
</section>
</body>
</html>