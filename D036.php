<?php

    // 自分の得意な言語で
    // Let's チャレンジ！！
    $lines = fgets(STDIN);

    $str = str_replace("at", "@", $lines);
    echo $str;

?>
