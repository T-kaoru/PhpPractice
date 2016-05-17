<?php
    $tag = explode(' ',trim(fgets(STDIN)));
    $str = trim(fgets(STDIN));
    //タグの長さ
    $len0 = strlen($tag[0]);
    $len1 = strlen($tag[1]);
    //タグ開始位置
    $pts0 = strpos($str, $tag[0]);
    $pts1 = strpos($str, $tag[1]);
    if( $pts0 != "FALSE" || $pts1 != "FALSE" ){
        $flg = 0;
    }else{
        $flg = 1;
    }

    while( $flg === 0 ){

        $sta = $len0 + $pts0;   //表示・検索開始位置
        $len = $pts1 - $sta;    //表示する名長さ

        $stst = substr( $str, $sta ,$len);

        if( $stst === "" ){
            echo "<blank>";
        }else{
            echo $stst;
        }

        $ndl = $pts1 + $len1;
        $pts0 = strpos($str, $tag[0], $ndl);
        $pts1 = strpos($str, $tag[1], $ndl);
        if( $pts0 === false || $pts1 === false ){
            break;
        }
        echo "\n";
    }
?>
