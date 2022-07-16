<?php
  function SumIsInteger($a = null,$b = null){
    if (isset($a) && isset($b)) {
      if (is_integer($a) && is_integer($b)) {
        echo $a+$b . " " . "Простое сложение чисел";
      }
      else {
        echo "Вы ввели не числа или не целые числа!";
      }
    }
    else {
      echo "Вы ничего не ввели или не до конца выполнили условие!";
    }
  }

  function ShowArray($animal_1 = "Кошка", $animal_2 = "Собака", $animal_3 = "Мышь") {
    if (is_string($animal_1) & is_string($animal_2) & is_string($animal_3)) {
      $animal_array = $animal_1 . ' ' . $animal_2 . ' ' . $animal_3;
      echo "$animal_array Это строка животных из отдельных переменных";
    }
    else {
      echo "Вы ввели не строковое значение!";
    }
  }


  function CheckEmpty($str = "") {
    return empty($str) ? "Строка пустая" : "Содержимое строки - $str";
  }


  function CheckNumber($number = null) {
    if (isset($number)) {
      if (is_integer($number) && $number != 10) {
        $answer = $number > 10 ? 'Число больше десяти' : "Число меньше десяти"; //Тернарный оператор
        echo "$number $answer";
    }
    else {
      $answer = $number === 10 ? "Это десять" : "Вы ввели не числа или не целые числа!";
      echo "$number $answer";
    }
  } else {
      echo "Вы ничего не ввели или не до конца выполнили условие!";
    }
}

  function randomInt($min = 0, $max = 100) {
    return mt_rand($min,$max);
  }

  function CheckType($var = null) {
    return isset($var) ? "Тип переменной - " . gettype($var) : "Вы ничего не ввели!";
  }

  function Rounded($number = null, $pointnumber = null) {
    return round($number, $pointnumber);
  }

  function Calc($num1,$num2,$operation) {
    switch ($operation) {
      case '+':
        return $num1 + $num2;
        break;
      case '-':
        return $num1 - $num2;
        break;
      case '*':
        return $num1 * $num2;
        break;
      case '/':
        return $num1 / $num2;
        break;
      default:
        return "Неправильный знак";
        break;
    }
  }

  function FromOneToNumber ($number = 1) {
    $count = 0;
    while ($count < $number ) {
      $count++;
      echo "$count\n";
    }
    return $number == 0 ? "0 Серьезно?" : "";
  }

  function FindSimpleNumber($number = 1) {
    $count = 0;
    for ($i=2; $i <= $number; $i++) {
      if ($number % $i == 0) {
        $count++;
      }
    }
    return $count == 1 ? "Число простое" : "Число плохое";
  }
 ?>
