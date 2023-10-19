<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T09</title>
</head>
<body>
<header>
    <h1>Zadanie T09</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Po zapoznaniu się  z materiałem napisz skrypt, w którym zdefiniuj tablicę asocjacyjną - 5-elementową. W tablicy indeksami są nazwy państw, a wartościami ich stolice.</p>
</header>

<section>
<?php
    $stolice = ["Polska" => "Warszawa", "Niemcy" => "Berlin", "Czechy" => "Praga", "Hiszpania" => "Madryt", "Belgia" => "Bruksela"];
    echo var_dump($stolice);
?>
</section>
</body>
</html>