<?php
require_once('util.php');
$user = 'inventoryuser';
$password = 'inventoryuser';
$dbName = 'inventory';
$host = 'localhost:3306';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <div>
    <?php
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $sql = "SELECT * FROM brand";
      $stm = $pdo->prepare($sql);  # SQLのセット
      $stm->execute();  # SQLの実行
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);

      echo "<table>";
      echo "<thead><tr>";
      echo "<th>ID</th>";
      echo "<th>メーカー</th>";
      echo "<th>国</th>";
      echo "</tr></thead>";
      echo "<tbody>";
      foreach ($result as $row) {
        echo "<tr>";
        echo "<td>", es($row['id']), "</td>";
        echo "<td>", es($row['name']), "</td>";
        echo "<td>", es($row['country']), "</td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
    } catch (Exception $e) {
      echo '<span class="error">データベースエラー</span>';
      echo $e->getMessage();
      exit();
    }
    ?>
  </div>
</body>

</html>