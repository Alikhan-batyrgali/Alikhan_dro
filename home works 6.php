
<?php
$a = 5;
$b = 5;
$c = "-";
switch ($c) {
    case "+":
        $d = $a + $b;
        echo " полученный результат: $d";
        break;
    case "-":
        $d = $a - $b;
        echo " полученный результат: $d";
        break;
    case "*":
        $d = $a * $b;
        echo " полученный результат: $d";
        break;
    case "/":
        if  ($b != 0) {
            $d= $a / $b;
            echo "полученный результат: $d";
        } else {
            echo "не дели на ноль";
        }
        break;
        default:
        echo "неверный оператор, используете  '+', '-', '*', '/' ";
}
        

?>