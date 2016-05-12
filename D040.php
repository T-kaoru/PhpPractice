<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $week = array(
        0 => fgets(STDIN),
        1 => fgets(STDIN),
        2 => fgets(STDIN),
        3 => fgets(STDIN),
        4 => fgets(STDIN),
        5 => fgets(STDIN),
        6 => fgets(STDIN),
    );
    $day = 0;

    for( $i = 0; $i < 7; $i++ ){
        if ( $week[$i] <= 30 ){
            $day = $day + 1;
        }
    }

    echo $day;

?>
