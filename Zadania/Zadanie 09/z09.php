<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 09</title>
</head>
<body>
<header>
    <h1>Zadanie 09</h1>
    <h2>Autor: Kacper Zając</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który zamienia długość podaną w calach na mm. (1cal=25,3995 mm)</p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">Długość w calach:</label>
        <input type="text" step="any" id="val-1" name="val-1">

        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['val-1'] != ""){
        $input = (float )$_POST['val-1'];
        $wynik = $input * 25.3995;

        echo "<h2>$input cali to $wynik mm</h2>";
    }
}
?>

</body>
</html>