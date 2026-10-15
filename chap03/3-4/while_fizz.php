<?php
$i = 1;
while ($i <= 10) {
  if ($i % 3 === 0) {
    echo "fizz ";
  } else {
    echo $i . " ";
  }
  $i++;
}
