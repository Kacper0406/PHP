<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 62</title>
</head>
<body>
<header>
    <h1>Zadanie 62</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program, który dla podanej wartości wyświetla ocenę wyrażoną słownie według następującego klucza</p>
</header>

<section>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">Podaj ocenę:</label>
        <input type="number" step="any" id="val-1" name="val-1">

        <input type="submit" value="Wyślij">
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $liczba = $_POST['val-1'];

    switch ($liczba) {
        case 0:
            echo "nieklasyfikowany";
            break;
        case $liczba > 0 && $liczba <= 3:
            echo "poprawny";
            break;
        case $liczba >= 4 && $liczba <= 5:
            echo "dobry";
            break;
        case 6:
            echo "wyróżniający";
            break;
        default:
            echo "Nie właściwa liczba";
            break;
    }
}
?>

</section>
</body>
</html>