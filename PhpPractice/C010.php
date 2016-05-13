<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $data = fgets(STDIN);
    $data = str_replace("\n", "", $data);
    $abR = explode(" ", $data);
    $abR[2] = pow($abR[2], 2);
    $KI = fgets(STDIN);
    for($i=0; $i<$KI; $i++){
        $uhyo[$i] = fgets(STDIN);
        $uhyo[$i] = str_replace("\n", "", $uhyo[$i]);
        $uhyo[$i] = explode(" ", $uhyo[$i]);
        $koko1 = pow(($uhyo[$i][0] - $abR[0]), 2 );
        $koko2 = pow(($uhyo[$i][1] - $abR[1]), 2 );

        if($koko1 + $koko2 >= $abR[2]){
            echo "silent\n";
        }else{
            echo "noisy\n";
        }
    }

?>
