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
    <img src="img/logo.png" alt="Logo" class="logo">
</header>

<form id="produkty">
    <div class="produkt">
        <img src="img/chleb.png" alt="chleb">
        <div class="produkt-header">
            <p>Bochenek chleba</p>
            <span>(0.23zł szt.)</span>
        </div>

        <input type="number" min="0">
    </div>

    <div class="produkt">
        <img src="img/bulka.png" alt="bułka">
        <div class="produkt-header">
            <p>Bułka piastowska</p>
            <span>(0.23zł szt.)</span>
        </div>
        <input type="number" min="0">
    </div>

    <div class="produkt">
        <img src="img/paczek.png" alt="pączek">
        <div class="produkt-header">
            <p>Pączek</p>
            <span>(0.23zł szt.)</span>
        </div>
        <input type="number" min="0">
    </div>

    <input type="submit" value="Zamów">
</form>

<footer>
    <h4>Autor: Kacper Zając</h4>
</footer>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

}
?>
</body>
</html>