<?php
    //kuji
    $data = fgets(STDIN);
    $data = str_replace("\n", "", $data);
    $no = explode(" ", $data);
    //kuji枚数
    $n = fgets(STDIN);

    for( $i=0; $i<$n; $i++ ){
         $data = fgets(STDIN);
         $data = str_replace("\n", "", $data);
         $lt = explode(" ", $data);
         $hit[$i] = 0;

         for( $f=0; $f<6; $f++ ){
             for( $g=0; $g<6; $g++ ){
                 if( $no[$g] === $lt[$f] ){
                     $hit[$i] += 1;
                 }
             }
         }

         echo $hit[$i] . "\n";

    }

?>
