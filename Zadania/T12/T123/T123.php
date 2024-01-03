<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T12.3</title>
</head>
<body>
<header>
    <h1>Zadanie T12.3</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>W pliku imiona.txt zapisano 7 imion, każde imię w jednym wierszu (plik utwórz w edytorze tekstowym np. notatnik). Napisz skrypt, który odczyta imiona z pliku i wyświetli je na stronie w kolejności zapisania, oraz w kolejności odwrotnej.</p>
</header>

<section>
    <?php
    $names = file("imiona.txt");

    echo "Wyświetlone normalnie: ";
    foreach($names as $name){
        echo "$name, ";
    }

    echo "<br>";

    $reverse_names = array_reverse($names);

    echo "Wyświetlone odwrotnie: ";
    foreach($reverse_names as $name){
        echo "$name, ";
    }
    ?>
</section>
</body>
</html>

