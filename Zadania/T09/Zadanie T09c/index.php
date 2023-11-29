<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T09c</title>
</head>
<body>
<header>
    <h1>Zadanie T09c</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 7 x 7 wpisze wygenerowane losowo znaki w zakresie <'a','e'>, wyświetli tę tablicę, a następnie:</p>
</header>

<section>
<?php
    $tab = [['', '', '', '', '', '', '',],
            ['', '', '', '', '', '', '',],
            ['', '', '', '', '', '', '',],
            ['', '', '', '', '', '', '',],
            ['', '', '', '', '', '', '',],
            ['', '', '', '', '', '', '',],
            ['', '', '', '', '', '', '',],
    ];

    $a = 0;

    function randomChar(){
        $temp = rand(0, 4);
        global $a;
        switch ($temp){
            case 0:
                $a += 1;
                return 'a';
            case 1:
                return 'b';
            case 2:
                return 'c';
            case 3:
                return 'd';
            case 4:
                return 'e';
        }
    }

    for($i=0; $i<7; $i++){
        for($j=0; $j<7; $j++){
            $tab[$i][$j] = randomChar();
        }
    }
    $row = 0;
    $max_row_b = 0;

    for($i=0; $i<7; $i++){
        $row_b = 0;
        for($j=0; $j<7; $j++){
            if($tab[$i][$j] == 'b'){
               $row_b++;
            }
        }
        if($row_b > $max_row_b){
            $max_row_b = $row_b;
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
    echo "Litera 'a' występuje: $a razy";
    echo "<br>";
    echo "Litera 'b' występuje najwięcej razy w: $row wierszu";
?>
</section>
</body>
</html>