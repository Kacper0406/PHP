<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 11 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $wartosc = $_POST['val-1'];
        $procent = $_POST['val-2'];
        $wynik = ($procent/100) * $wartosc;
        echo "<h2>$procent % z $wartosc to $wynik</h2>";
    ?>
</section>
</body>
</html>