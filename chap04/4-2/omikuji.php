<?php
$num = mt_rand(1, 3);
if ($num === 1) {
  $kuji = "大吉";
} else if ($num === 2) {
  $kuji = "吉";
} else {
  $kuji = "凶";
}
echo $kuji;

/* 修正時刻: Thu 2026/10/15 19:09:49 */
