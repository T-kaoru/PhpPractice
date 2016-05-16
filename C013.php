<?php
//箱とボールサイズ
    $n = str_replace("\n", "", fgets(STDIN));
    $preg ="[*" . "$n" . "*]";
    $flg = 0;
    $m = fgets(STDIN);

//詳細取得、処理開始
    for ( $i=0; $i<$m; $i++ ) {
        $room = fgets(STDIN);
        if ( preg_match("/$preg/", $room )){
        }else{
            echo $room;
            $flg = 1;
        }

    }

    if( $flg === 0 ){
        echo "none";
    }
?>
