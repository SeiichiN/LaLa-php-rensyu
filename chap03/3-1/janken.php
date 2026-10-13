<?php
# $user  ユーザー
# $com   コンピューター 0,1,2 ランダム
$user = (int) $_POST['hand'];
$com = mt_rand(0, 2);
