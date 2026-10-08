<?php
const TAX = 0.1;
$price = 1000;
$zeikomi = $price * (1+TAX);

echo "税込価格：", $zeikomi, "円", PHP_EOL;

echo "税込価格：", $price * (1+TAX), "円", PHP_EOL;
