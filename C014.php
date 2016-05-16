<?php
//箱とボールサイズ
    $nr = explode(' ',trim(fgets(STDIN)));
    $siz = $nr[1] * 2;

//詳細取得、処理開始
    for ( $i=0; $i<$nr[0]; $i++ ) {
        $hwd = explode(' ',trim(fgets(STDIN)));
        if( $siz <= $hwd[0] && $siz <= $hwd[1] && $siz <= $hwd[2] ){
            echo $i +1 . "\n";
        }

    }

?>
