<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T09e</title>
</head>
<body>
<header>
    <h1>Zadanie T09e</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program w którym do jednowymiarowej tablicy znakowej wpisanych jest 10 znaków podanych przez użytkownika</p>
</header>

<section>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">Podaj 10 liter oddzielonych "," np.: "a,s,b,f,d...":</label>
        <input type="text" step="any" id="val-1" name="val-1"><br><br>

        <label for="val-2">Podaj ilość słów do wygenerowania</label>
        <input type="number" step="any" id="val-2" name="val-2"><br><br>

        <label for="val-3">Podaj długość słów do wygenerowania</label>
        <input type="number" step="any" id="val-3" name="val-3"><br><br>

        <input type="submit" value="Wyślij">
    </form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $words = [];

    $letters_input = $_POST['val-1'];
    $words_amount = $_POST['val-2'];
    $words_lenght = $_POST['val-3'];

    $letters = explode(",", $letters_input);

    echo "<br>Litery: ";    
    foreach ($letters as $letter){
        echo "$letter, ";
    }

    for($i=0; $i<$words_amount; $i++){
        $word = "";
        for($j=0; $j<$words_lenght; $j++){
            $word .= $letters[rand(1, count($letters))-1];
        }
        $words[$i] = $word;
    }

    echo "<br>Słowa: ";
    foreach ($words as $word){
        echo "$word, ";
    }
}
?>

</section>
</body>
</html>