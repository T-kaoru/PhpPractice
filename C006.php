<?php
//パラメータ個数N、ユーザ人数M、トップK、各係数pts
    $NMK = explode(' ',trim(fgets(STDIN)));
    $pts = explode(' ',trim(fgets(STDIN)));
    for ( $i=0; $i<$NMK[2]; $i++ ) {
        $rank[$i] = 0;
    }

    for ( $i=0; $i<$NMK[1]; $i++ ) {
        $usr = explode(' ',trim(fgets(STDIN)));
        $pt = 0;
        for ( $f=0; $f<$NMK[0]; $f++ ){
            $pt +=  $usr[$f] * $pts[$f];
        }
        $pt = round($pt);
        for ( $f=0; $f<$NMK[2]; $f++ ){
            if ( $pt > $rank[$f] ){
                $p = $rank[$f];
                $rank[$f] = $pt;
                $pt = $p;
            }
        }
    }

    foreach ($rank as $key => $value) {
        echo $value . "\n";
    }
