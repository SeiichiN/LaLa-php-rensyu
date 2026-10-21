<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title></title>
  </head>
  <body>
    <h1>名前を受け取る</h1>
    <?php
    require_once('util.php');
    $name = $_POST['name'];
    echo es($name);
    ?>
  </body>
</html>

<!-- 修正時刻: Thu 2026/10/22 06:36:00 -->
