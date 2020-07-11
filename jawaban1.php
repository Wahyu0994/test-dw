<?php 

//function buble sort
function bubble_sort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {

                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr; //kembalikan nilai yang sudah disorting
}
//end bubble sort
 
//Contoh Penggunaan
$arr = array(1,3,2,8,5,7,4,0); //data angka yang akan disorting
$arr = bubble_sort($arr); //gunakan fungsi sorting
 
//tampilkan hasil sorting
print_r ($arr); 


 ?>
