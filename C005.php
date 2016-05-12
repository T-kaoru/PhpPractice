<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = fgets(STDIN);

    for($i=0; $i<$N; $i++){
        $ipaddr[$i] = fgets(STDIN);
    }

    foreach ($ipaddr as $key1 => $ipadd) {
            $ip = explode(".", $ipadd);
            $ip = array_filter($ip, "strlen");
            $ip = array_values($ip);
            $flg = count($ip);
            foreach ($ip as $key2 => $oct) {
                if( $oct > 255 or $oct < 0 ){
                    $flg = $flg + 4;
                }
            }
            if( $flg===4 ){
                echo "True\n";
            }else{
                echo "False\n";
            }
    }
