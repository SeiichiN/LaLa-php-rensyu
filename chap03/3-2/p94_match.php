<?php
# p94の switch_1.php を match式に書き換える

$color = "blue";
$price = match($color) {
  "green" => 120,
  "red" => 140,
  "blue" => 160,
  default => 100,
};
echo "{$color}は{$price}円";