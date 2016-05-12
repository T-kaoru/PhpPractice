<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $str = "Hello ";
    for ($i=0; $i<$n; $i++){
        $var = fgets(STDIN);
        if ($i===$n -1){
            $str = $str . $var . ".";
        }else{
        $str = $str . $var . ",";
        }
    }

    $str = str_replace("\n", "", $str);
    echo $str;

?>
