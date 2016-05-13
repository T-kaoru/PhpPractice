<?php
    // D019
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $date = fgets(STDIN);
    $date = str_replace("\n", "", $date);
    $str = explode(" ", $date);
    $tin = substr($str[0], $str[1]-1, 1);
    echo $tin;
?>
