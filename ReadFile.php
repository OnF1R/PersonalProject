<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php
    include 'InitBootstrap.php';
    include 'BasicLogic.php';
    ?>
    <meta charset="utf-8">
    <title>Чтение фалов</title>
  </head>
  <body>
    <div class="container">
      <?php
        $text = "Some text";
        $text .= " and ... \n";
        $filename = date("Y-m-d-H-i-s") . '.txt';
        file_put_contents($filename, $text); // Создать файл с данными
        echo file_get_contents($filename); // Вывести данные файла
      ?>
    </div>
  </body>
</html>
