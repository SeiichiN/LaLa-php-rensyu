<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>郵便番号と電話番号のチェック</h1>
  <?php
  $yubin = $_POST["bango"];
  $phone = $_POST["phone"];
  $pattern1 = "/^[0-9]{3}-{0,1}[0-9]{4}$/";
  $pattern2 = "/^(090|080|070)-?\d{4}-?\d{4}$/";
  if (preg_match($pattern1, $yubin)) {
    echo "郵便番号OK<br>";
  } else {
    echo "郵便番号NG<br>";
  }
  if (preg_match($pattern2, $phone)) {
    echo "電話番号OK<br>";
  } else {
    echo "電話番語NG<br>";
  }
  ?>
  <p><a href="preg_form.html">もどる</a></p>
</body>
</html>