<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 03 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $name = $_POST['name'];

        $val1 = $_POST['val-1'];
        $val2 = $_POST['val-2'];
        $val3 = $_POST['val-3'];
        $val4 = $_POST['val-4'];

        $tab = array($val1, $val2, $val3, $val4);
        $numbers = array();
        $suma = 0;
        $srednia = 0;

        foreach ($tab as $x) {
            if(is_numeric($x[0])){
                array_push($numbers, (float) $x);
            }
        }

        foreach ($numbers as $num){
            $suma += $num;
        }

        $srednia = $suma / count($numbers);


        echo "<h1>Witaj $name na mojej stronie</h1>";

        var_dump($tab);
        echo "<br>";

//        var_dump($numbers);
//        echo "<br>";

        echo "Suma: $suma <br>";
        echo "Średnia: $srednia";
    ?>
</section>
</body>
</html>