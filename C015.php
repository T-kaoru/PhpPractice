<?php
//レシート枚数
    $N = fgets(STDIN);
    $p = 0;

//詳細取得、処理開始
    for ( $i=0; $i<$N; $i++ ) {
        $res = explode(' ',trim(fgets(STDIN)));
        if( preg_match("[^3.]", $res[0] )){
            $p += (int) floor( $res[1] * 0.03 );
        }elseif ( preg_match("[3$]", $res[0] )){
            $p += (int) floor( $res[1] * 0.03 );
        }elseif ( preg_match("[5$]", $res[0] )){
            $p += (int) floor( $res[1] * 0.05 );
        }else{
            $p += (int) floor( $res[1] * 0.01 );
        }
    }

    echo $p;

?>
