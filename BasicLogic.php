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

  function ShowArray() {
    $animal_1 = 'Кошка';
    $animal_2 = 'Собака';
    $animal_3 = 'Мышь';
    $animal_array = $animal_1 . ' ' . $animal_2 . ' ' . $animal_3;
    echo $animal_array;
  }
 ?>
