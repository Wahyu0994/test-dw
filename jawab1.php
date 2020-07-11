<?php

// mengurutkan nilai dengan teknik bubble sort

function bubble_Sort($my_array ) {
  do{
    $swapped = false;
   for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ ) {
       if( $my_array[$i] > $my_array[$i + 1] ){
            list( $my_array[$i + 1], $my_array[$i] ) = array( $my_array[$i], $my_array[$i + 1] );
             $swapped = true;
        }
   }
  }while( $swapped );
return $my_array;
}
  $test_array = [2,4,6,1,8,7,3];
  $datalain = ['d','y','a'];
  echo "array sebelum diurutkan :";
  echo implode(', ',$test_array );
  echo "\n";
  echo "array setelah diurutkan: ";
  echo implode(', ',bubble_Sort($test_array));
  echo "\n"; 
  echo "\n";
  echo "data lain :";
  echo implode(', ',$datalain );
  echo "\n"; 
  echo "data lain :";
  echo implode(', ',bubble_Sort($datalain));
