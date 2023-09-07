<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 05 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
    $val1 = intval($_POST['val-1']);
    $val2 = intval($_POST['val-2']);

    $sum = $val1 + $val2;
    $sub = $val1 + $val2;
    $div = $val1 / $val2;
    $mul = $val1 * $val2;

    echo "<h3>a: $val1</h3>";
    echo "<h3>b: $val2</h3>";
    echo "<h2>Suma: $sum</h2>";
    echo "<h2>Różnica: $sub</h2>";
    echo "<h2>Iloczyn: $mul</h2>";
    echo "<h2>Iloraz: $div</h2>";
    ?>
</section>
</body>
</html>