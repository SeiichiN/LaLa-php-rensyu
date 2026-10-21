<?php
function zeikomi($price) {
  $zeikomi = $price * 1.1;
  return $zeikomi;
}

$kakaku = 1000;
$zeikomi = zeikomi($kakaku);
echo "税込価格は{$zeikomi}です。";
