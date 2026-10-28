<?php
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$user = "testuser";
$password = "testuser";
$dbName = "testdb";
$host = "localhost:3306";
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
    $id = $_POST['id'] ?? '';
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // $sql = "SELECT * FROM member WHERE id = " . $id;
      $sql = "SELECT * FROM member WHERE id = {$id}";
      echo $sql, "<br>", PHP_EOL;
      $stm = $pdo->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>名前</th>
            <th>年齢</th>
            <th>性別</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($result as $row) {
            echo "<tr>";
            echo "<td>", h($row['id']), "</td>";
            echo "<td>", h($row['name']), "</td>";
            echo "<td>", h($row['age']), "</td>";
            echo "<td>", h($row['sex']), "</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    <?php
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました</span><br>';
      echo $e->getMessage();
      exit();
    }
    ?>
    <hr>
    <a href="index.php">もどる</a>
  </div>
</body>

</html>

<!-- 修正時刻: Mon 2026/10/26 07:49:04 -->
