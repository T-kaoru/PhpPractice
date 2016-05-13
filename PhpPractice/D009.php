<?php
    $str = fgets(STDIN);
    $str_ex = explode(" ", $str);

    echo $str_ex[1] - $str_ex[0];
?>
