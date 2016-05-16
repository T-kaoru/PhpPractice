<?php
    $lsp = fgets(STDIN);    //レシピ件数

    for($i=0; $i<$lsp; $i++){
        $l_p[$i] = explode(' ',trim(fgets(STDIN))); //レシピ格納
        $ks[$i] = 0;    //何人前作れるかスペース
    }
    $you = fgets(STDIN);
    for($i=0; $i<$you; $i++){
        $y_p[$i] = explode(' ',trim(fgets(STDIN))); //自分が持つ食材
    }

    if($you != 0){
        foreach ($l_p as $key1 => $lesp ){
            foreach ($y_p as $key2 => $your ){
                if ( $lesp[0] === $your[0]){    //食材名で1つ1つ検索
                    $ks[$key1] = (int) floor( $your[1] / $lesp[1] ); //当てはまったら繰り下げで格納
                    }
                }
            }
        }

    echo min($ks);

 ?>
