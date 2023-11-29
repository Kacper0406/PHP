<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T10.3</title>
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
    <h1>Zadanie T10.3</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku polskim. W przypadku podania innej wartości zwraca informację o błędzie.</p>
</header>

<section>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">Podaj liczbę (1-12):</label>
        <input type="number" step="any" id="val-1" name="val-1">

        <input type="submit" value="Wyślij">
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $val1 = $_POST['val-1'];

    function mieisace($val1){
        switch ($val1){
            case 1: return "Styczeń";
            case 2: return "Luty";
            case 3: return "Marzec";
            case 4: return "Kwiecień";
            case 5: return "Maj";
            case 6: return "Czerwiec";
            case 7: return "Lipiec";
            case 8: return "Sierpień";
            case 9: return "Wrzesień";
            case 10: return "Październik";
            case 11: return "Listopad";
            case 12: return "Grudzień";
            default: return "Błąd";
        }
    }
    $miesiąc = mieisace($val1);
    echo "$val1 miesiąc to $miesiąc";
}
?>
</section>
</body>
</html>