<?php
# 引数に "だよね" をつけて返す関数
function dayone($a) {
  return $a . "だよね";
}

echo dayone("わんわん");
echo dayone(200);
# わんわんだよね200だよね