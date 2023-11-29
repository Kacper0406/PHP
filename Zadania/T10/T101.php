<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T10.1</title>
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
    <h1>Zadanie T10.1</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz funkcję, która dla podanej liczby zwraca (return) jej wartość bezwzględną i zastosuj tę funkcję do wyświetlenia wyniku. Do obliczenia wartości bezwzględnej użyj instrukcji warunkowej (wariant 1) i operatora warunkowego "?" (wariant 2).</p>
</header>

<section>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">a:</label>
        <input type="number" step="any" id="val-1" name="val-1">

        <input type="submit" value="Wyślij">
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $val1 = $_POST['val-1'];
    function bzw($a)
    {
        return ($a >= 0) ? $a : $a * -1;
    }

    echo bzw($val1);
}
?>
</section>
</body>
</html>