<?php
    touch('narodoweCzytanie.txt');
    $file = fopen('narodoweCzytanie.txt', 'w');
    fwrite($file, "W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R. W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”. 
WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R. 
NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.
FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA.");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T10.2</title>
</head>
<body>
<header>
    <h1>Zadanie T10.2</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz funkcję, której wynikiem będzie podniesienie wartości przekazanego jej poprzez referencję argumentu do potęgi przekazanej również jako argument. Funkcja zwraca wartość i wyświetla wynik</p>
</header>

<section>
    <?php
    if (!$p = fopen('narodoweCzytanie.txt', 'r')) {
        echo "Nie można otworzyć pliku";
    } else {
        while (!feof($p)) {
            $w = fgets($p);
            echo "$w<br>";
        }
        fclose($p);
    }
    ?>
</section>
</body>
</html>
