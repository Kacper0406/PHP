<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 12 - wynik</title>
</head>
<body>
<section class="wynik">
    <?php
        $min = $_POST['val-1'];
        $max = $_POST['val-2'];
        $nums = [];
        $sum = 0;
        $multiply = 1;
        $avg = 0;

        if($min < $max && $min > 0){
            for ($i = 0; $i < 5; $i++) {
                array_push($nums, rand($min, $max));
            }
            foreach ($nums as &$num) {
                $sum += $num;
                $multiply *= $num;
            }
            $avg = $sum / 5;
        }
        echo "<ul><li>$nums[0]</li><li>$nums[1]</li><li>$nums[2]</li><li>$nums[3]</li><li>$nums[4]</li></ul>";
        echo "<h2>Suma: $sum</h2>";
        echo "<h2>Iloczyn: $multiply</h2>";
        echo "<h2>Średnia: $avg</h2>";
    ?>
</section>
</body>
</html>