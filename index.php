<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php
    include 'InitBootstrap.php';
    include 'BasicLogic.php';
    ?>
    <meta charset="utf-8">
    <title>Базовая страница</title>
  </head>
  <body>
    <div class="container">
      <h1><a href="UploadFileForm.php">Загрузить музыку</a></h1>
      <h1><a href="AudioPlayer.php">Плеер</a></h1>
      <h1><a href="ReadFile.php">Чтение файлов</a></h1>
      <h3>Математические функции</h3>
      <?php
        SumIsInteger(5,16); // Сумма двух целых чисел
        echo "<br>";
        SumIsInteger(); // Сумма двух целых чисел
        echo "<br>";
        SumIsInteger(5,'fff'); // Сумма двух целых чисел
        echo "<br>";
        echo 8 % 3 . " Остаток от деления <br>";
        echo 8 / 3 . " Деление <br>";
        echo round(8/3) . " Округление деления ( в большую сторону) <br>";
        echo (int) (8 / 3) . " Целая часть при делении <br>";

      ?>
      <h3>Функция вывода массива</h3>
      <?php
        ShowArray(); // Сумма двух целых чисел
        echo "<br>";
        ShowArray("Жук"); // Массив животных
      ?>
      <h3>Функция проверки числа</h3>
      <?php
        CheckNumber(55); // Проверка числа
        echo "<br>";
        CheckNumber(10); // Проверка числа
        echo "<br>";
        CheckNumber(randomInt()); // Проверка числа
        echo "<br>";
        CheckNumber(); // Проверка числа
      ?>
      <h3>Работа с классом Point</h3>
      <?php
        include 'Point.php';

        $firstPoint = new Point;
        $firstPoint->x=10;
        $firstPoint->y=34;

        $secondPoint = new Point;
        $secondPoint->x=3;
        $secondPoint->y=10;

        $range = sqrt(pow($firstPoint->x - $secondPoint->x,2) + pow($firstPoint->y - $secondPoint->y,2));
        echo "Расстояние между точками равно = $range";
       ?>
      <h3>Константы</h3>
      <?php
        for ($i=0; $i < 2; $i++) {
          if (!defined('BIRTHDAY')) {
            define('BIRTHDAY', "29.02.2002", true);
            echo "Константа создалась со значением " . constant('BIRTHDAY') . " <br>";
          }
          if (defined('BIRTHDAY')) {
            echo "Константа уже создана, значение ". constant('BIRTHDAY') ." <br>";
          }
        }
        echo 'Имя файла ' . __DIR__ . ' <br>';
        echo 'Имя файла ' . __FILE__ . ' <br>';
        echo 'Номер строки ' . __LINE__ . ' <br>';

       ?>
      <h3>От единицы до числа</h3>
      <?php
        echo FromOneToNumber(0) ."<br>";
        echo FromOneToNumber(randomInt());
      ?>
      <h3>Другие функции</h3>
      <?php
        echo CheckEmpty(123) . " Проверка пустоты строки";
        echo "<br>";
        echo CheckType("true") . " Проверка типа переменной";
        echo "<br>";
        echo Rounded(21.41231231, 2) . " Округление";
        echo "<br>";
        echo Calc(5,50,"*") . " Примитивный калькулятор";
        echo "<br>";
        echo FindSimpleNumber(11);
      ?>
    </div>
  </body>
</html>
