<?php
  print_r(5 * 5 . ' Просто вывод строки/выражения');
  print_r('<br>');
  //echo '<br>';

  function SumIsInteger($a,$b){
    if (is_integer($a) && is_integer($b)) {
      print_r($a+$b . ' Сложение чисел');
    }
    else {
      print_r("Вы ввели не числа!");
    }
  }

  
 ?>
