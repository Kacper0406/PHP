<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 86</title>
</head>
<body>
<header>
    <h1>Zadanie 86</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program, który dla podanej liczby całkowitej a losuje a liczb w zakresie <1, 9>.i wyświetla je na ekranie w postaci: liczba i liczba znaków ‘|’.</p>
</header>

<section>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">Podaj a:</label>
        <input type="number" step="any" id="val-1" name="val-1">

        <input type="submit" value="Wyślij">
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $a = (int) $_POST['val-1'];

    $liczby= [];

    for($i = 0; $i<$a; $i++){
        $liczby[] = rand(1,9);
    }

    foreach ($liczby as $x){
        $string = "";
        for ($j=0; $j<$x; $j++){
            $string .= "| ";
        }
        echo "$x $string <br>";
    }
}
?>

</section>
</body>
</html>