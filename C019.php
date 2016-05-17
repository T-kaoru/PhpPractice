<?php
    $Q = fgets(STDIN);

    for( $i=0; $i<$Q; $i++ ){
        $data = fgets(STDIN);
        $sum = 0;

        for ( $f=2; $f<$data; $f++ ){
            $p = $data / $f;
            $q = preg_match("/\A[1-9][0-9]*\z/", $p);
            if ( $q === 1){
                $sum += $p;
            }
        }

        $sum += 1;
        if ( $sum == $data ){
            echo "perfect\n";
        }elseif( $sum == $data +1 || $sum == $data -1 ){
            echo "nearly\n";
        }else{
            echo "neither\n";
        }
    }
?>
