<?php
// число населений была выдуманной
$a = [
    "Атырау" => 148800,
    "Алматы" => 931488,
    "Астана" => 214886,
    "Шымкент" => 409370,
    "Актау" => 335700
];

$b = 0;
$c = "";

Foreach ($a as $a => $d) {
    If ($d > $b) {
        $b = $d;
        $c = $a;
    }
}

Echo "Населения города $c составляют $b людей ";
?>