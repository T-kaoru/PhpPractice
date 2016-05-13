<?php
//人参の本数、目安糖分、許容範囲データ取得
    $data = "1 7 3";
    $data = str_replace("\n", "", $data);
    $NSp = explode(" ", $data);

//糖分量算出
    $low = $NSp[1] - $NSp[2];
    $hai = $NSp[1] + $NSp[2];
    $siz = 0;

    //人参データ取得
    for( $i=0; $i<$NSp[0]; $i++ ){
        $jin[$i] = "6 5";//fgets(STDIN);
        $jin[$i] = str_replace("\n", "", $jin[$i]);
        $jin[$i] = explode(" ", $jin[$i]);

        if( $jin[$i][1] >= $low ){
            if ( $jin[$i][1] <= $hai ){
                if ( $jin[$i][0] > $siz ){
                    $siz = $jin[$i][0];
                    $no = $i + 1;
                }
            }
        }
    }

    if( $siz === 0 ){
        echo "not found";
    }else{
        echo $no;
    }
?>
