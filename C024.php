<?php
    //命令個数 n
     $n = fgets(STDIN);
     $num1 = 20;
     $num2 = 20;

     for( $i=0; $i<$n; $i++ ){
         $data = fgets(STDIN);
         $data = str_replace("\n", "", $data);
         $p = explode(" ", $data);

         if( $p[0] === "SET" ){
             if( $p[1] === "1" ){
                 $num1 = $p[2];
             }else{
                 $num2 = $p[2];
             }
         }elseif( $p[0] === "ADD" ){
             $num2 = $num1 + $p[1];
         }elseif( $p[0] === "SUB" ){
             $num2 = $num1 - $p[1];
         }
     }

     echo $num1 . " " . $num2;

?>
