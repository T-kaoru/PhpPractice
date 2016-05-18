<?php

  $HW = explode(' ',trim(fgets(STDIN)));

  for( $i=0; $i<$HW[0]; $i++ ){
    $yx[$i] = str_split(str_replace("\n", "", fgets(STDIN)));
  }

  $you = explode(' ',trim(fgets(STDIN)));
  $N = fgets(STDIN);

  $x = $you[0] -1;
  $y = $you[1] -1;

    for ( $i=0; $i<$N; $i++ ){
      $key = str_replace("\n", "", fgets(STDIN));

      if ( $key == "U" ){
        while ( $y > 0 ){
           $y -= 1;
          if ( $yx[$y][$x] == "." ){
            break;
          }
        }
      }elseif( $key == "D" ){
        while ( $y < $HW[0] -1 ){
           $y += 1;
          if( $yx[$y][$x] == "." ){
            break;
          }
        }
      }elseif( $key == "R" ){
        while ( $x < $HW[1] -1 ){
           $x += 1;
          if( $yx[$y][$x] == "." ){
            break;
          }
        }
      }elseif( $key == "L" ){
        while ( $x > 0 ){
           $x -= 1;
          if( $yx[$y][$x] == "." ){
            break;
          }
        }
      }
    }

  echo ($x+1) . " " . ($y+1) ;

?>
