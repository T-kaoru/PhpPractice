<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $cnt = 0;

    for ( $i=0; $i<7; $i++ ){
        $oyasu = fgets(STDIN);
        if ( $oyasu === "no\n" ){
            $cnt = $cnt + 1;
        }
    }

    echo $cnt;

?>
