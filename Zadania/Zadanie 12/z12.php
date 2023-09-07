<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 12</title>
</head>
<body>
<header>
    <h1>Zadanie 12</h1>
    <h2>Autor: Kacper Zając</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla podanych wartości całkowitych min i max, gdzie min < max i min > 0 oblicza 5 liczb pseudolosowych z zakresu min, max, wyświetla te liczby, a następnie oblicza i wyświetla ich sumę, iloczyn i średnią.</p>
    <form action="z12w.php" method="post">
        <label for="val-1">min:</label>
        <input type="number" step="any" id="val-1" name="val-1">

        <label for="val-2">max:</label>
        <input type="number" step="any" id="val-2" name="val-2">

        <input type="submit" value="Wyślij">
    </form>
</section>
</body>
</html>