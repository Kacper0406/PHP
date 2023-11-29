<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 42</title>
</head>
<body>
<header>
    <h1>Zadanie 42</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program który sprawdza czy podane dwie liczby całkowite są parzyste i tylko w tym przypadku wypisuje większą z nich. W przypadku podania liczby nieparzystej wypisuje która to liczba lub liczby.</p>
</header>

<section>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">a:</label>
        <input type="number" step="any" id="val-1" name="val-1">

        <label for="val-2">b:</label>
        <input type="number" step="any" id="val-2" name="val-2">

        <input type="submit" value="Wyślij">
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $a = $_POST['val-1'];
    $b = $_POST['val-2'];

    $a = (int) $a;
    $b = (int) $b;

    echo "$a $b <br>";

//    if($a % 2 == 0 && $b % 2 == 0){
//        if($a > $b){
//            echo $a;
//        } else if($a < $b){
//            echo $b;
//        } else if ($a == $b){
//            echo $a;
//        }
//    } else if ($a % 2 != 0 || $b % 2 != 0){
//        if($a %2 != 0){
//            echo "$a <br>";
//        }
//        if ($b %2 != 0){
//            echo "$b <br>";
//        }
//    }

    if($a % 2 == 0 && $b % 2 == 0){
        if($a > $b){
            echo $a;
            return;
        }
        if($a < $b){
            echo $b;
            return;
        }
        if ($a == $b){
            echo $a;
            return;
        }
    }
    if($a %2 != 0){
        echo "$a <br>";
    }
    if ($b %2 != 0){
        echo "$b <br>";
    }
}
?>

</section>
</body>
</html>