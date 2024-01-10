<?php
//$cookie_name = "last_visit";
//
//if(!isset($_COOKIE[$cookie_name])) {
//    echo "Jesteś na stronie pierwszy raz.";
//
//    $current_time = date('m/d/Y h:i:s a', time());
//    setcookie($cookie_name, $current_time, time() + (86400 * 30), "/"); // 86400 = 1 day
//} else {
//    $last_visit = $_COOKIE[$cookie_name];
//    $current_time = date('m/d/Y h:i:s a', time());
//    setcookie($cookie_name, $current_time, time() + (86400 * 30), "/"); // 86400 = 1 day
//
//    echo "Ostatnie wejście na stronę było: $last_visit";
//}
//?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T14b</title>
</head>
<body>
<header>
    <h1>Zadanie T09</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Po zapoznaniu się  z materiałem napisz skrypt, w którym zdefiniuj tablicę asocjacyjną - 5-elementową. W tablicy indeksami są nazwy państw, a wartościami ich stolice.</p>
</header>

<section>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="imie">Imie:</label>
        <input type="text" name="imie">
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko">
        <input type="submit">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $imie = $_POST['imie'];
        $nazwsiko = $_POST['nazwisko'];

        $cookie_name = "name";
        $cookie_surname = "surname";

        setcookie($cookie_name, $imie, time() + (86400 * 30), "/");
        setcookie($cookie_surname, $nazwsiko, time() + (86400 * 30), "/");
    }
    ?>

</section>
</body>
</html>
