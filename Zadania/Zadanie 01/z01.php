<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 01</h1>
    <h2>Autor: Kacper Zając 3ip</h2>
    <hr>
</header>
<section>
    <p>Program wczytuje imię i wyświetla powitanie z tym imieniem</p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="imie">Podaj imię:</label>
        <input type="text" id="imie" name="imie">
        <input type="submit" value="Wyślij">
    </form>
</section>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $imie = $_POST['imie'];
    echo "$imie<br>";
    var_dump($_POST);
}

?>

</body>
</html>