<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 07</title>
</head>
<body>
<header>
    <h1>Zadanie 07</h1>
    <h2>Autor: Kacper Zając</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i Fahrenheita.</p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="value">podaj temperaturę w <sup>o</sup>C</label>
        <input type="number" step="any" id="value" name="value">

        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['value'] != "") {

        $celsjusz = $_POST['value'];
        $kelwin = $celsjusz + 273.15;
        $fahrenheit = ($celsjusz * 1.8) + 32;

        echo "<h2>Wyniki obliczeń dla T<sub>Celsjusz</sub> =  $celsjusz <sup>o</sup>C";
        echo "<h2>Wyniki obliczeń dla T<sub>Kelvin</sub> =  $kelwin K";
        echo "<h2>Wyniki obliczeń dla T<sub>Fahrenheit</sub> =  $fahrenheit <sup>o</sup>F";
    }
}

?>

</body>
</html>