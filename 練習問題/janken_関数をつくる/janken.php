<?php
# $user  ユーザー formから0,1,2が送られてくる
# $com   コンピューター 0,1,2 ランダム
$user = (int)$_POST['hand'];
$com = mt_rand(0, 2);

# 以下のif文を関数にする。
# $user と $com を与えたら、
# どちらの勝ちかを文字列で返す関数にする。

if ($user === $com) {
  echo "あいこです";
} else if (($user+1)%3 === $com) {
  echo "あなたの勝ちです";
} else {
  echo "わたしの勝ちです";
}
?>
<p><a href="jankenForm.html">もう一度</a></p>
