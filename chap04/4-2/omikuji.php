<?php
function omikuji() {
  $num = mt_rand(1, 3);
  $msg = match($num) {
    1 => "大吉",
    2 => "吉",
    3 => "凶",
  };
  return $msg;
}
echo "今日の運勢は . omikuji() . です。";