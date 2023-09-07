<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 06 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['val-1'];
    $b = $_POST['val-2'];
    $c = $_POST['val-3'];

    if($a + $b > $c && $b + $c > $a && $c + $a > $b){
        $p = ($a+$b+$c)/2;
        $pole = sqrt($p*($p-$a)*($p-$b)*($p-$c));
        echo "<h3>a: $a</h3>";
        echo "<h3>b: $b</h3>";
        echo "<h3>b: $c</h3>";
        echo "<h2>Pole: $pole</h2>";
    }
    else{
        echo "<h3>a: $a</h3>";
        echo "<h3>b: $b</h3>";
        echo "<h3>b: $c</h3>";
        echo "<h2>Nie można zbudować trójkąta z takich boków</h2>";
    }

    ?>
</section>
</body>
</html>