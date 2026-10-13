<?php
$tokuten = (int) $_POST['tokuten'];
if ($tokuten >= 80) {
  echo "素晴らしい";
} else {
  echo "もう少し頑張りましょう!";
}
echo "{$tokuten}点でした。";
?>
<a href="tokutenForm.html">もどる</a>
