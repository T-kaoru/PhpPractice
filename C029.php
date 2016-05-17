<?php

// 連休とお出かけ日
    $data = "1 1";//fgets(STDIN);
    $data = str_replace("\n", "", $data);
    $MN = explode(" ", $data);

// 日付と降水確率。一度全て格納する必要あり？
    for($i=0; $i<$MN[0]; $i++){
        $test1 = 6 + $i;
        $test2 = 50 - $i;
        $uhyo[$i] = $test1 . " " . $test2;
        $uhyo[$i] = str_replace("\n", "", $uhyo[$i]);
        $uhyo[$i] = explode(" ", $uhyo[$i]);
        }

// 降水確率計算用ループカウンタ、条件判定用変数初期化
    $MNa = $MN[0] - $MN[1];
    $rain = 100 * $MN[1];
    $day1 = $uhyo[0][0];
    $day2 = $uhyo[0][0] + $MN[1] - 1;

// 降水確率調べ。カウンター欲しいので例によってfor文。
    for($i=0; $i<=$MNa; $i++){
        $MNc = $i + $MN[1]; // 2重ループ用カウンタ
        $wate = 0;
        for($f=$i; $f<$MNc; $f++){
            $wate = $uhyo[$i][1] + $uhyo[$f][1];
        }
        // 比較して日数求める。
        if( $wate < $rain ){
            $rain = $wate;
            $day1 = $uhyo[$i][0];
            $day2 = $uhyo[$i][0] + $MN[1] - 1;
        }
    }

    echo $day = $day1 . " " . $day2;

?>
