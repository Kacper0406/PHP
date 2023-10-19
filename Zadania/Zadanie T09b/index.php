<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T09b</title>
</head>
<body>
<header>
    <h1>Zadanie T09b</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 3 x 3 wpisuje liczby pseudolosowe z zakresu <0,9>, wyświetla tą tablicę, a następnie oblicza sumę liczb rozmieszczonych wzdłuż przekątnych:</p>
</header>

<section>
<?php
    $tab = [[0,0,0], [0,0,0], [0,0,0]];
    $lg_pd_sum = 0;
    $ld_pg_sum = 0;

    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            $tab[$i][$j] = rand(0, 9);
        }
    }

    for($i=0; $i<3; $i++){
        $lg_pd_sum += $tab[$i][$i];
        $ld_pg_sum += $tab[$i][2 - $i];
    }

    foreach ($tab as $arr){
        foreach ($arr as $num){
            echo $num;
        }
        echo "<br>";
    }
    echo "<br>";
    echo "LG_PD: $lg_pd_sum";
    echo "<br>";
    echo "LD_PG: $ld_pg_sum";
    echo "<br>";
    if($ld_pg_sum > $lg_pd_sum){
        echo "LD_PG jest większy";
    }
    if($ld_pg_sum < $lg_pd_sum){
        echo "LG_PD jest większy";
    }
    if($ld_pg_sum == $lg_pd_sum){
        echo "LG_PD i LD_PG są równe";
    }
?>
</section>
</body>
</html>