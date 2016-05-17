<?php
    $N = fgets(STDIN);
    $s = str_split(fgets(STDIN));
    $cnt = 0;
    $spt = 0;
    $ept = $N-1;
    $sta = $s[0];
    $end = $s[$N-1];    //両端の中身

    if ( $sta === $end ){
      // 先頭と末尾が同じ文字で在れば無条件で埋め尽くし
        if ( $sta === "b" ){
            $cnt = $N;
        }else{
            $cnt = 0;
        }
    }else{
        // ポインタが入れ替わるタイミングで抜け
        while ( $spt <= $ept ){
            // 先頭からの探索
            for ( $i=$spt; $i<$N; $i++ ){
                if ( $s[$i] != $sta  ){
                    $spt = $i;
                    break;
                }
                if ( $s[$i] === "b" ){
                    $cnt += 1;
                }
            }
            // 末尾からの探索
            for ( $i=$ept; $i>=0; $i-- ){
                if ( $s[$i] != $end  ){
                    $ept = $i;
                    break;
                }
                if ( $s[$i] === "b" ){
                    $cnt += 1;
                }
            }
            // ポインタの設定と置換。最後の入れ替えなら無視
            if ( $spt <= $ept){
                for ( $i=$spt; $i<=$ept; $i++ ){
                    if ( $s[$i] === "w"){
                        $s[$i] = "b";
                    }else{
                        $s[$i] = "w";
                    }
                }
            }
        }
    }

    echo $cnt;

?>
