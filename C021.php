<?php
    //台風の目の座標、台風の目の半径、暴風域半径
    $ten = explode(' ',trim(fgets(STDIN)));
    $ten1 = pow($ten[2], 2);
    $ten2 = pow($ten[3], 2);

    //被害者
    $N = fgets(STDIN);

    //被害者座標情報取得、処理開始
    for($i=0; $i<$N; $i++){
        $maz = explode(' ',trim(fgets(STDIN)));
        $mazo =  pow($ten[0] - $maz[0], 2) + pow($ten[1] - $maz[1], 2);

        if( $mazo <= $ten2 ){
            if( $mazo >= $ten1 ){
                echo "yes\n";
            }else{
                echo "no\n";
            }
        }else{
            echo "no\n";
        }
    }

 ?>
