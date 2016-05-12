<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $p = fgets(STDIN);
    echo $p = str_replace("\n", "", $p);

    for($i=2; $i<10; $i++){
        echo " " . $p * $i;
    }
?>
