<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T09d</title>
</head>
<body>
<header>
    <h1>Zadanie T09d</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program, który tworzy dwuwymiarową tablicę o wymiarach 4 x 4 i wypełnia ją liczbami pseudolosowymi  z zakresu <0,1>, wyświetla tą tablicę z zachowaniem wierszy i kolumn</p>
</header>

<section>
<?php
    $tab = [[0,0,0,0], [0,0,0,0], [0,0,0,0], [0,0,0,0]];
    $tab_reversed = [[0,0,0,0], [0,0,0,0], [0,0,0,0], [0,0,0,0]];

    for($i=0; $i<4; $i++){
        for($j=0; $j<4; $j++){
            $tab[$i][$j] = rand(0,1);
        }
    }

    for ($i=0; $i<4; $i++) {
        for ($j=0; $j<4; $j++) {
            $tab_reversed[$j][$i] = $tab[3-$i][$j];
        }
    }

    $row = 0;
    $row_sum = 0;

    for($i=0; $i<4; $i++){
        $row_sum_temp = 0;
        for($j=0; $j<4; $j++){
            $row_sum_temp += $tab[$i][$j];
        }
        if($row_sum_temp > $row_sum){
            $row_sum = $row_sum_temp;
            $row = $i+1;
        }
    }

    foreach ($tab as $arr){
        foreach ($arr as $num){
            echo $num;
        }
        echo "<br>";
    }

    echo "<br>";
    echo "Największa suma liczb jest w $row rzędzie";

    echo "<br><br>";

    echo "Tablica odwrócona o 90 stopni w prawo: <br>";
    echo "<br>";

    foreach ($tab_reversed as $arr){
        foreach ($arr as $num){
            echo $num;
        }
        echo "<br>";
    }
?>
</section>
</body>
</html>