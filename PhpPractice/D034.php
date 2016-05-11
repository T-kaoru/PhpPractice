<?php
    // D034
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $menu= fgets(STDIN);
    $kore = 21 % $menu;

    if( $kore===0 ){
        echo $menu;
    }else{
        echo $kore;
    }

?>
