<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $data = fgets(STDIN);
    $data = str_replace("\n", "", $data);
    $ysi = explode(" ", $data);

    $ysi2 = $ysi[0] * ( ( 100 - $ysi[1] ) * 0.01 );
    $ysi3 = $ysi2 * ( ( 100 - $ysi[2] ) * 0.01 );

    echo $ysi3;

?>
