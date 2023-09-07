<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 10 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $x = $_POST['val-1'];
        $wynik = pow($x,2) / pow( 1 + abs($x),2);
        echo "<h2>$wynik</h2>";
    ?>
</section>
</body>
</html>