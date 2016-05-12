<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $data = fgets(STDIN);
    $data = str_replace("\n", "", $data);
    $HW = explode(" ", $data);

    for ( $i=0; $i<$HW[0]; $i++ ) {
        $uhyo[$i] = fgets(STDIN);
        $uhyo[$i] = str_replace("\n", "", $uhyo[$i]);
        $uhyo[$i] = explode(" ", $uhyo[$i]);

        for ( $f=0; $f<$HW[1]; $f++) {
            if($uhyo[$i][$f] < 128){
                $uhyo[$i][$f] = 0;
            }else{
                $uhyo[$i][$f] = 1;
            }
            echo $uhyo[$i][$f];

            if($f==$HW[1]-1){
                echo "\n";
            }else{
                echo " ";
            }
        }
    }

?>
