<?php
# 1から10までの合計を求める
$a = 1;
$total = 0;  # 合計
while ($a <= 10) {
  $total = $total + $a;
  $a++;
}
echo $total;
