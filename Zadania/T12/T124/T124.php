<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T12.4</title>
</head>
<body>
<header>
    <h1>Zadanie T12.4</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Plik napisy.txt zawiera 1000 liczb binarnych zapisanych w oddzielnych wierszach. Napisz skrypt, który odczyta te liczby i wypisze je na ekranie</p>
</header>

<section>
<?php
    $numbers = file("napisy.txt");

    $id = 1;
    foreach($numbers as $number){
        $decimal = bindec($number);
        echo "$id-$number-$decimal</br>";
        $id++;
    }
?>
</section>
</body>
</html>

