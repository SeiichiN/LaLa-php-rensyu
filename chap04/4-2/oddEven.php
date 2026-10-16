<?php
function oddEven($num) {
  if ($num % 2 === 0) {
    $type = "偶数";
  } else {
    $type = "奇数";
  }
  return $type;
}

$num = 123;
echo "{$num}は" . oddEven($num) . "です";
