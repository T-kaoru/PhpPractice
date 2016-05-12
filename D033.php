<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $str = fgets(STDIN);

    $str_ex = explode(" ", $str);
    for($i=0; $i<=1; $i++){
        $str_ex[$i] = ucfirst($str_ex[$i]);
        $str_ex[$i] = substr($str_ex[$i], 0, 1);
        if($i===0){
            $str_ex[$i] = $str_ex[$i] . ".";
        }
        echo $str_ex[$i];
    }
?>
