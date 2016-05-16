<?php
//おやカード
    $par = explode(' ',trim(fgets(STDIN)));

//子の数
    $n = fgets(STDIN);

//子取得、処理開始
    for ( $i=0; $i<$n; $i++ ) {
        $cld = explode(' ',trim(fgets(STDIN)));
        if ( $par[0] > $cld[0] ){
            echo "High";
        }elseif( $par[0] < $cld[0] ){
            echo "Low";
        }elseif( $par[1] < $cld[1] ){
            echo "High";
        }else{
            echo "Low";
        }

        echo "\n";

    }



 ?>
