<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 04 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $val1 = $_POST['val-1'];
        $val2 = $_POST['val-2'];

        if($val2 != 0){
            $wynik = round($val1 / $val2, 2);
            echo "<h3>a: $val1</h3>";
            echo "<h3>b: $val2</h3>";
            echo "<h2><b>Iloraz a/b: $wynik<b></h2>";
        }
        else{
            echo "<h3>Nie dzielimy przez 0!</h3>";
        }
    ?>
</section>
</body>
</html>