<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>くじ</h1>
  <?php
  $kuji = mt_rand(1, 3);
  $msg = "";
  switch ($kuji) {
    case 1:
      $msg = "大吉";
      break;
    case 2:
      $msg = "吉";
      break;
    case 3:
      $msg = "凶";
  }
  ?>
  <p>今日のあなたの運勢は <?= $msg; ?>です。</p>
  <p><a href="kujiForm.html">もう一度くじをひく</a></p>

</body>

</html>