<?php
  $data = explode(' ',trim(fgets(STDIN)));

  for( $i=0; $i<$data[0]; $i++ ){
    $xy[$i] = str_split(fgets(STDIN));
  }

  $you = explode(' ',trim(fgets(STDIN)));
  $N = fgets(STDIN);

  //自分の座標と床状態
  $x = $you[0] -1;
  $y = $you[1] -1;
  for ( $i=0; $i=$N; $i++ ){
    $udrl = str_replace("\n", "", fgets(STDIN));
    $now = "#";
    echo $x +1 . " " . $y +1

    if ( $udrl == "U" ){
      while ( $now == "#" ){
        $y = $y - 1;
        if ( $xy[$x][$y] == "." || $y == 0 ){
          $now = ".";
        }
      }
    }elseif( $udrl == "D" ){
      while ( $now == "#" ){
        $y += 1;
        if( $xy[$x][$y] == "." || $y == $data[1]-1 ){
          $now = ".";
        }
      }
    }elseif( $udrl == "R" ){
      while ( $now == "#" ){
        $x += 1;
        if( $xy[$x][$y] == "." || $x == $data[0]-1 ){
          $now = ".";
        }
      }
    }elseif( $udrl == "L" ){
      while ( $now == "#" ){
        $x = $x - 1;
        if( $xy[$x][$y] == "." || $x == 0 ){
          $now = ".";
        }
      }
    }
  }

  echo $x +1 . " " . $y +1;

?>
