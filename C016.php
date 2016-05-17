<?php
    $str = "TAIN";//str_replace("\n", "", fgets(STDIN));
    $strs = str_split($str);
    $cnt = count($strs);

    for ( $i=0; $i<$cnt; $i++ ){
        if ( $strs[$i] === "A"){
            $strs[$i] = "4";
        }elseif( $strs[$i] === "E"){
            $strs[$i] = "3";
        }elseif( $strs[$i] === "G"){
            $strs[$i] = "6";
        }elseif( $strs[$i] === "I"){
            $strs[$i] = "1";
        }elseif( $strs[$i] === "O"){
            $strs[$i] = "0";
        }elseif( $strs[$i] === "S"){
            $strs[$i] = "5";
        }elseif( $strs[$i] === "Z"){
            $strs[$i] = "2";
        }

        echo $strs[$i];

    }
