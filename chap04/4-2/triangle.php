<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<?php
function triangle($bottom, $height) {
  $area = ($bottom * $height) / 2;
  return $area;
}

$bottom = (float) $_POST['bottom'];
$height = (float) $_POST['height'];
$area = triangle($bottom, $height);
echo "<p>底辺={$bottom} ";
echo "高さ={$height} ";
echo "面積={$area} </p>";
?>
</body>
</html>