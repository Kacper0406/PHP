<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 09 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $input = $_POST['val-1'];
        $wynik = round($input / 0.03937, 4);

        echo "<h2>$input cali to $wynik mm</h2>";
    ?>
</section>
</body>
</html>