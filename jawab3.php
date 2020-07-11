<?php  


function drawImage($panjang)
{
    for ($i = 1; $i <= $panjang; $i++) {
        for ($j = 1; $j <= $panjang; $j++) {
            if ($j %2== 0 || $i%2==0 ) {
                echo "*";
            }
            else {
                echo "#";
            }
        }
        echo "<br>";
    }
}

drawImage(7);

?>
