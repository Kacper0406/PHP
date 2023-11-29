<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T10.4</title>
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
    <h1>Zadanie T10.4</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe i będzie wypisywała mniejszą z nich w kolorze zielonym, a większą w czerwonym. W przypadku podania liczb jednakowych obie należy wyświetlić w kolorze niebieskim.</p>
</header>

<section>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">Podaj liczbę:</label>
        <input type="number" step="any" id="val-1" name="val-1">

        <label for="val-2">Podaj liczbę:</label>
        <input type="number" step="any" id="val-2" name="val-2">

        <input type="submit" value="Wyślij">
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $val1 = $_POST['val-1'];
    $val2 = $_POST['val-2'];

    function setTextColors($val1, $val2){
        if($val1 > $val2){
            return "<span style='color: red'>$val1</span> > <span style='color: green'>$val2</span>";
        }

        if($val1 < $val2){
            return "<span style='color: green'>$val1</span> < <span style='color: red'>$val2</span>";
        }

        if($val1 == $val2){
            return "<span style='color: blue'>$val1</span> = <span style='color: blue'>$val2</span>";
        }

        return "Błąd";
    }
    $text = setTextColors($val1, $val2);
    echo $text;
}
?>
</section>
</body>
</html>