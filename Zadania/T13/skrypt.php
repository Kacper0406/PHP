<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Podsumowanie</title>
</head>
</html>

<?php
    echo "<h1>Dane Osobowe Klienta</h1><hr>";
    echo "Imie i nazwisko: " . $_POST['name'] . "<br>";
    echo "Adres E-mail: " . $_POST['email'] . "<br>";
    echo "Numer Telefonu: " . $_POST['phone'] . "<br>";
    echo "Imie i nazwisko: " . $_POST['name'] . "<br><hr>";
    echo "Wiadomość: " . $_POST['msg'] . "<br><hr>";

    echo "<h1>Wybrałeś dla Twoich butów:</h1><hr>";
    echo "Kolor trampek: " . $_POST["color"] . "<br>";
    echo "Rozmiar trampek: " . $_POST["size"] . "<br>";

    $dodatki = $_POST['features'];
    echo"Dodatki: " . "<br>";

    if(!empty($dodatki)){
        echo "<ul>";
        foreach ($dodatki as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
    }
?>