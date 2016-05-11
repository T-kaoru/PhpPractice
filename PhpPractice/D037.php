<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $siko = fgets(STDIN);
    $day = fgets(STDIN);

    $hako = $day / $siko + 1;
    echo (int)$hako;
/* 完全に期待された出力結果はでないので不完全。おそらく繰り上げとか繰り下げとか。 */

?>
