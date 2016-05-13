<?php
    $data = fgets(STDIN);
    $data = str_replace("\n", "", $data);
    $data_h = explode(" ", $data);

    if( $data_h[0] > $data_h[1] ){
        echo $data_h[0];
    }elseif( $data_h[0] === $data_h[1] ){
        echo "eq";
    }else{
        echo $data_h[1];
    }
?>
