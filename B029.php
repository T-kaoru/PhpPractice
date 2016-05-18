<?php

  $xy = explode(' ',trim(fgets(STDIN)));
  $k = fgets(STDIN);
  $N = fgets(STDIN);
  $kp[0][0] = 1000;
  $avg =0;

  for ( $i=0; $i<$N; $i++ ){
    $po[$i] = explode(' ',trim(fgets(STDIN)));
    $m = sqrt( pow( $xy[0] - $po[$i][0], 2 ) + pow( $xy[1] - $po[$i][1], 2 ) );

    for ( $f=0; $f<$k; $f++ ){
        if ( $m < $kp[0][$f] ){
            $kp[0][$f+1] = $kp[0][$f];
            $kp[0][$f] = $m;
            $kp[1][$f] = $po [$i][2];
        }
    }
  }

  for ( $i=0; $i<$k; $i++ ){
      $avg += $kp[1][$i];
  }

  echo $avg;

?>
