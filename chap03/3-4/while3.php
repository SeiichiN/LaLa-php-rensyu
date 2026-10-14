<?php
# わんわんと5回くりかえす
$a = 0;
while (TRUE) {
  echo "わんわん", PHP_EOL;
  $a++;
  if ($a === 5) { break; }
}