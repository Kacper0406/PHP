<?php
    touch('nazwisko_i_imie.txt');
    touch('doSkasowania.txt');
    unlink('doSkasowania.txt');
    mkdir('KacperZajac');
    touch('KacperZajac/imie_i_nazwisko.txt');
?>
