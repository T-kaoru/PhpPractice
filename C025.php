<?php
    //運べる枚数M、届く回数N取得
    $M = fgets(STDIN);
    $N = fgets(STDIN);

    //時間初期化
    $H = 0;
    $page = 0;
    $run = 0;

    //fax情報取得、処理開始
    for($i=0; $i<$N; $i++){
        $fax[$i] = fgets(STDIN);
        $fax[$i] = str_replace("\n", "", $fax[$i]);
        $fax[$i] = explode(" ", $fax[$i]);

        if( $H === $fax[$i][0] ){
            $page += $fax[$i][2]; //時間が同じなのでページに加算
        }else{
            //今までの時間で貯めた枚数の処理
            if( $page % $M === 0){
                $run += $page / $M;
            }else{
                $run += ceil( $page / $M );
            }
            //変数初期化
            $H = $fax[$i][0];
            $page = $fax[$i][2];
        }
    }

    if( $page % $M === 0){
        $run += $page / $M;
    }else{
        $run += ceil( $page / $M );
    }

    echo $run;

 ?>
