<?php
    //kuji
    $day = 1;//fgets(STDIN);
    $low = "1000000";
    $hai = "1";

    for ( $i=0; $i<$day; $i++ ) {
        $kabu = "10 20 30 5";//fgets(STDIN);
        $kabu = str_replace("\n", "", $kabu);
        $rate = explode(" ", $kabu);

        if ( $i == 0 ){
            $sta = $rate[0];
        }
        if ( $i == $day - 1 ){
            $fin = $rate[1];
        }
        if ( $hai < $rate[2] ){
            $hai = $rate[2];
        }
        if ( $low > $rate[3] ){
            $low = $rate[3];
        }
    }

    echo $sta . " " . $fin . " " . $hai . " " . $low;

?>
