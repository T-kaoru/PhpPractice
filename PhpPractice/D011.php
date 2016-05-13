<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$num = fgets(STDIN);
$num = str_replace("\n", "", $num);
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$p = strpos($str, $num, 0);
echo $p + 1;
?>
