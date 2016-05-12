<?php
    for( $i=0; $i<5; $i++ ){
        $p[$i] = fgets(STDIN);
        if($i===0){
            $max = $p[$i];
            $min = $p[$i];
        }
        if( $max < (int) $p[$i] ){
            $max = $p[$i];
        }elseif( $min > (int) $p[$i] ){
            $min = $p[$i];
        }
    }

    echo $max;
    echo $min;
?>
