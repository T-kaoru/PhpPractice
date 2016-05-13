<?php
    function po($data)
    {
        $data = fgets(STDIN);
        $data = str_replace("\n", "", $data);
        $data_h = explode(" ", $data);
        return $data_h;
    }

    for($i=0; $i<$MN[0]; $i++){
        $test1 = 6 + $i;
        $test2 = 50 - $i;
        $uhyo[$i] = $test1 . " " . $test2;
        $uhyo[$i] = str_replace("\n", "", $uhyo[$i]);
        $uhyo[$i] = explode(" ", $uhyo[$i]);
        }

    $data = fgets(STDIN);
    $data = str_replace("\n", "", $data);
    $p = explode(" ", $data);

?>
