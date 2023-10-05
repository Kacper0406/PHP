<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Piekarnia</title>
</head>
<body>
<header>
    <h1></h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią arytmetyczną. WYnik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
</header>

<form id="produkty">
    <div class="produkt">
        <img src="img/chleb.png" alt="chleb">
        <p>Bochenek chleba</p>
        <input type="number">
    </div>

    <div class="produkt">
        <img src="img/bulka.png" alt="bułka">
        <p>Bułka piastowska</p>
        <input type="number">
    </div>

    <div class="produkt">
        <img src="img/paczek.png" alt="pączek">
        <p>Pączek</p>
        <input type="number">
    </div>

    <input type="submit" value="Zamów">
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

}
?>
</body>
</html>