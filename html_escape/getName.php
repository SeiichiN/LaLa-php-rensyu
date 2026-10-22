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
    $_POST = es($_POST);
    $name = $_POST['name'];
    // 入力値チェック
    // エラーメッセージ  
    // エラーがなければ表示
    echo $name;
    ?>
  </body>
</html>

<!-- 修正時刻: Thu 2026/10/22 06:36:00 -->
