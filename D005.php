<?php
    $data = fgets(STDIN);
    $data = str_replace("\n", "", $data);
    $p = explode(" ", $data);

    echo $p[0];

    for($i=0; $i<9; $i++){
        echo " ";
        echo $p[0] = $p[0] + $p[1];
    }
?>
