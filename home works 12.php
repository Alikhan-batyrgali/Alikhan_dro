<?php
Function factorial($n) {
    $b = 1;
    For ($i = 1; $i <= $n; $i++) {
        $b *= $i;
    }
    Return $b;
}

// Вычисляем факториал числа 10
$c = 1;
$b = factorial($c);

Echo "Факториал числа $c: $b";
?>
