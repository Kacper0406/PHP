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
    <table>
        <tr>
            <td>Imię i nazwisko</td>
            <td>Klasa/grupa:</td>
            <td>Data:</td>
        </tr>
        <tr>
            <td>Kacper Zając</td>
            <td>3ip</td>
            <td>09.11.2023</td>
        </tr>
    </table>
    <h1>Zadanie T10.2</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz funkcję, której wynikiem będzie podniesienie wartości przekazanego jej poprzez referencję argumentu do potęgi przekazanej również jako argument. Funkcja zwraca wartość i wyświetla wynik</p>
</header>

<section>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">x:</label>
        <input type="number" step="any" id="val-1" name="val-1">
        <label for="val-2">y:</label>
        <input type="number" step="any" id="val-2" name="val-2">

        <input type="submit" value="Wyślij">
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $val1 = $_POST['val-1'];
    $val2 = $_POST['val-2'];

    function potega(&$val1, &$val2){
        $wynik = 1;

        for ($i = 0; $i < $val2; $i++) {
            $wynik = $wynik * $val1;
        }

        return $wynik;
    }

    $x = $val1;
    $y = $val2;

    $wynik = potega($val1, $val2);

    echo "x = $x<br>";
    echo "y = $y<br>";
    echo "x<sup>y</sup> = $x<sup>$y</sup> = $wynik";
}
?>
</section>
</body>
</html>