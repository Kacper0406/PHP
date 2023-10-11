<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Piekarnia</title>
</head>
<body>
<header>
    <img draggable="false" src="img/logo.png" alt="Logo" class="logo">
    <marquee>
        <p>Promocja na pączki – co trzeci zamówiony pączek jest darmowy.⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀Promocja 10% na wszystko - jeśli ilość produktów jest liczbą pierwszą</p>
    </marquee>
</header>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="produkty" >
    <div class="produkt">
        <img draggable="false" src="img/chleb.png" alt="chleb">
        <div class="produkt-header">
            <p>Bochenek chleba</p>
            <span>(4.20zł szt.)</span>
        </div>

        <input type="number" min="0" name="ilosc-chleb" value="0">
    </div>

    <div class="produkt">
        <img draggable="false" src="img/bulka.png" alt="bułka">
        <div class="produkt-header">
            <p>Bułka piastowska</p>
            <span>(0.50zł szt.)</span>
        </div>
        <input type="number" min="0" name="ilosc-bulka" value="0">
    </div>

    <div class="produkt">
        <img draggable="false" src="img/paczek.png" alt="pączek">
        <div class="produkt-header">
            <p>Pączek</p>
            <span>(2.50zł szt.)</span>
        </div>
        <input type="number" min="0" name="ilosc-paczek" value="0">
    </div>

    <div>
        <p>Podaj swój wiek:</p>
        <input type="number" min="0" name="wiek" value="0">
    </div>

    <input type="submit" value="Zamów">
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

//    Deklaracja zmiennych

    $cena_chleb = 4.20;
    $ilosc_chleb = (int) $_POST['ilosc-chleb'];
    $promocja_chleb = 0;
    $suma_chleb = $ilosc_chleb * $cena_chleb - $promocja_chleb;

    $cena_bulka = 0.5;
    $ilosc_bulka = (int) $_POST['ilosc-bulka'];
    $promocja_bulka = 0;
    $suma_bulka = $ilosc_bulka * $cena_bulka - $promocja_bulka;

    $cena_paczek = 2.50;
    $ilosc_paczek = (int) ($_POST['ilosc-paczek']);
    $promocja_paczek = floor($ilosc_paczek / 3) * $cena_paczek;
    $suma_paczek =  $ilosc_paczek * $cena_paczek - $promocja_paczek;

    $final_suma = $suma_chleb + $suma_bulka + $suma_paczek;
    $final_promocja = $promocja_chleb + $promocja_bulka + $promocja_paczek;
    $final_ilosc = $ilosc_chleb + $ilosc_bulka + $ilosc_paczek;

    $wiek = (int) ($_POST['wiek']);

    $promka_matematyczna = false;

//    Funkcja sprawdzająca czy podana liczba jest liczbą pierwszą
    function jest_pierwsza($suma)
    {
        $n = 0;

        for($i = 2; $i < ($suma/2+1); $i++) {
            if($suma % $i == 0){
                $n++;
                break;
            }
        }

        if ($n == 0){
            global $final_suma;
            global $final_promocja;
            global $promka_matematyczna;

            $final_promocja += $final_suma * 0.1;
            $final_suma *= 0.9;
            $promka_matematyczna = true;
        }
    }

    jest_pierwsza($final_ilosc);

//    Formatowanie tekstu

    $cena_chleb = number_format((float)$cena_chleb, 2, '.', '');
    $promocja_chleb = number_format((float)$promocja_chleb, 2, '.', '');
    $suma_chleb = number_format((float)$suma_chleb, 2, '.', '');

    $cena_bulka = number_format((float)$cena_bulka, 2, '.', '');
    $promocja_bulka = number_format((float)$promocja_bulka, 2, '.', '');
    $suma_bulka = number_format((float)$suma_bulka, 2, '.', '');

    $cena_paczek = number_format((float)$cena_paczek, 2, '.', '');
    $promocja_paczek = number_format((float)$promocja_paczek, 2, '.', '');
    $suma_paczek = number_format((float)$suma_paczek, 2, '.', '');

    $final_promocja = number_format((float)$final_promocja, 2, '.', '');
    $final_suma = number_format((float)$final_suma, 2, '.', '');

//    Utworzenie elementów HTML

    $SECTION = <<< END

 <section id="summary">
    <h1>Podsumowanie zamówienia</h1>

    <table>
        <tr>
            <th>Produkt</th>
            <th>Ilość</th>
            <th>Cena</th>
            <th>Promocja</th>
            <th>Suma</th>
        </tr>
        <tr>
            <td><img draggable="false" src="img/chleb.png" alt="chleb"> <p>Chleb</p></td>
            <td>$ilosc_chleb szt.</td>
            <td>$cena_chleb zł</td>
            <td>-$promocja_chleb zł</td>
            <td>$suma_chleb zł</td>
        </tr>
        <tr>
            <td><img draggable="false" src="img/bulka.png" alt="bułka"> <p>Bułka</p></td>
            <td>$ilosc_bulka szt.</td>
            <td>$cena_bulka zł</td>
            <td>-$promocja_bulka zł</td>
            <td>$suma_bulka zł</td>
        </tr>
        <tr>
            <td><img draggable="false" src="img/paczek.png" alt="pączek"> <p>Pączek</p></td>
            <td>$ilosc_paczek szt.</td>
            <td>$cena_paczek zł</td>
            <td>-$promocja_paczek zł</td>
            <td>$suma_paczek zł</td>
        </tr>
        <tr>
            <td>Podsumowanie:</td>
            <td>$final_ilosc szt.</td>
            <td></td>
            <td>-$final_promocja zł</td>
            <td>$final_suma zł</td>
        </tr>
    </table>
</section>

END;

    $wiek_alert = <<< END

<div class="promka-info">
    <h4>Nie masz 18 lat!</h4>
</div>
    
END;

    $info_promocje = <<< END

<div class="promka-info">
    <h4>AKTYTWNE PROMOCJE: </h4>
</div>
    
END;

    $info_promocja_paczki = <<< END

<div class="promka-info">
    <p>Co trzeci pączek jest darmowy!</p>
</div>
    
END;

    $info_promocja_matematyczna = <<< END

<div class="promka-info">
    <p>Wszystko jest 10% taniej bo suma ilości zamówionych rzeczy jest liczbą pierwszą</p>
</div>
    
END;

    if($wiek >= 18){
        echo $SECTION;

        if($promocja_paczek != 0 || $promka_matematyczna){
            echo $info_promocje;

            if($promocja_paczek != 0){
                echo $info_promocja_paczki;
            }

            if($promka_matematyczna){
                echo $info_promocja_matematyczna;
            }
        }
    } else {
        echo $wiek_alert;
    }
}
?>

<footer>
    <h4>Autor: Kacper Zając</h4>
</footer>

</body>
</html>