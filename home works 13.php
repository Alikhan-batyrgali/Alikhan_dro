<?php
$a = 13;

$b = true;
$c = 2;

While ($c <= sqrt($a)) {
    If ($a % $c == 0) {
        $b = false;
        Break;
    }
    $c++;
}

If ($b && $a > 1) {
    Echo "Число $a является простым числом.";
} else {
    Echo "Число $a не является простым числом или меньше 2.";
}
?>
