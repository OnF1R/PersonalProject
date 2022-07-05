<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php include 'InitBootstrap.php'; ?>
    <meta charset="utf-8">
    <title>Музыкальная страница</title>
  </head>
  <body>
    <div class="container">
      <h1>Загрузка файла</h1>
      <h5>Выберите до 100 файлов</h5>
      <form action="UploadFile.php" method="post" enctype="multipart/form-data">
	       <input type="file" name="file[]" multiple>
	        <input type="submit" value="Отправить">
      </form>
    </div>
  </body>
</html>
