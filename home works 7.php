<?php
// 1-понедельник
// 2-вторник
// 3-среда
// 4-четверг
// 5-пятница
// 6-суббооа
// 7-воскресение
$a = 8;
switch ($a) {
 case 1:
  echo "понедельник";
  break;
 case 2:
  echo "вторник";
  break;
 case 3:
  echo "среда";
  break;
 case 4:
  echo "четверг";
  break;
 case 5:
  echo "пятница";
  break;
 case 6:
  echo "суббота";
     break;
 case 7:
  echo "воскресение";
  break;
 default:
  echo "введите число 1-7";
}
?>