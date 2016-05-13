<?php
// 問題数取得、点数初期化
    $N = fgets(STDIN);
    $pt = 0;
    $pts = 0;

// 問題取得
    for($i=0; $i<$N; $i++){
        $str = fgets(STDIN);
        $str = str_replace("\n", "", $str);
        $strt = explode(" ", $str);

        // バラバラにする v(^ヮ^)v
        $p1 = str_split($strt[0]);
        $pc1 = count($p1);
        $p2 = str_split($strt[1]);
        $pc2 = count($p2);

        // 配列数比較。
        if ( $pc1 === $pc2 ){
            $pts = 2;
            // 良かったら文字比較。違ったら減点。
            for( $f=0; $f<$pc1; $f++ ){
                if ( $p1[$f] != $p2[$f] ){
                    $pts -= 1;
                }
            }
            // 0以下を0に。
            if ( $pts < 0 ){
                $pts = 0;
            }
            $pt += $pts;
        // 配列の数が違っていたら×
        }else{
            $pts = 0;
        }
    }

    // 出力
    echo $pt;

 ?>
