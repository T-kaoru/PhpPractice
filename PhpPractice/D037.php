<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $siko = fgets(STDIN);
    $day = fgets(STDIN);

    $hako = $day / $siko;
    if( $hako == floor($hako)){
        echo $hako;
    }else{
        echo floor($hako) +1;
    }

?>
