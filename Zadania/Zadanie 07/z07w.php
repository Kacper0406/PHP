<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 07 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $celsjusz = $_POST['val-1'];
        $kelwin = $celsjusz + 273.15;
        $fahrenheit = ($celsjusz * 1.8) + 32;
        echo "<h2>$celsjusz <sup>o</sup>C = $kelwin K</h2>";
        echo "<h2>$celsjusz <sup>o</sup>C = $fahrenheit <sup>o</sup>F</h2>";
    ?>
</section>
</body>
</html>