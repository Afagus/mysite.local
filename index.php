<?php
//error_reporting(0);
require "inc/lib.inc.php";
set_error_handler("myError");
require "inc/data.inc.php";
?>


<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
      <?php
      require "inc/top.inc.php";
      ?>


    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
      <h1><?= $welcome;

          ?>, Гость</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->

      <?php
      require "inc/index.inc.php";
      ?>

    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
      <?php
      require "inc/menu.inc.php";
      ?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->

      <?php
      require "inc/bottom.inc.php";
      ?>

      <!-- Нижняя часть страницы -->
  </div>
</body>

</html>