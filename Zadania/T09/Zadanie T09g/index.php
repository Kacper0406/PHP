<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T09g</title>
</head>
<body>
<header>
    <h1>Zadanie T09g</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Dopisz kod, który wyświetli tablicę wraz z nazwami kluczy.</p>
</header>

<section>
    
<?php
$players = [];
$players[] = ["Nazwisko" => "Ronaldo", "Wiek" => 31, "Kraj" => "Portugalia","Drużyna" => "Real Madrid"];
$players[] = ["Nazwisko" => "Messi", "Wiek" => 27, "Kraj" => "Argentyna", "Drużyna"=> "Barcelona"];
$players[] = ["Nazwisko" => "Neymar", "Wiek" => 24, "Kraj" => "Brazylia", "Drużyna"=> "Barcelona"];
$players[] = ["Nazwisko" => "Rooney", "Wiek" => 30, "Kraj" => "Anglia", "Drużyna"=> "Man United"];

foreach ($players as $player){
    echo "Gracz: <br>";
    foreach ($player as $key => $value){
        echo "$key => $value<br>";
    }
    echo "<br>";
}

?>
</section>
</body>
</html>