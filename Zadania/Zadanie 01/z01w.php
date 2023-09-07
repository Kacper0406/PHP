<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 01 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $imie = $_POST['imie'];
        echo "<h1>Witaj $imie!!!<br>Miło cię widzieć</h1>"
    ?>
</section>
</body>
</html>