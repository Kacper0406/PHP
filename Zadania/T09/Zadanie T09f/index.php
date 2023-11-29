<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T09f</title>
</head>
<body>
<header>
    <h1>Zadanie T09f</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 7x7 wpisuje pseudolosowe liczby całkowite z zakresu <10,99> i wyświetla tę tablicę z zachowaniem wierszy i kolumn. Liczby nie mogą się powtarzać.</p>
</header>

<section>
    
<?php
    $numbers = [];

    for($i=10; $i < 100; $i++){
        $numbers[$i] = $i;
    };

    $tab = [[]];

    for($i=0; $i<7; $i++){
        for($j=0; $j<7; $j++){
            $temp_tab = array_values($numbers);
            $random = rand(0, count($numbers)-1);
            $tab[$i][$j] = $temp_tab[$random];
            unset($temp_tab[$random]);
            $numbers = array_values($temp_tab);
        }

    }

foreach ($tab as $arr){
    foreach ($arr as $num){
        echo "$num, ";
    }
    echo "<br>";
}
?>

</section>
</body>
</html>