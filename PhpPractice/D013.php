<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $str = explode(" ", $n);

    $po = floor($str[0] / $str[1]);
    $po = $po . " " . $str[0] % $str[1];
    echo $po;
?>
