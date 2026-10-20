<?php
$x = 100;
$y = 80;

//tanda || merupakan operator OR, jika kedua nilai sama-sama false maka percabangan langsung eksekusi Program Selesai
if ($x == 100 && $y == 80){
    echo "Masuk sini <br>";
} elseif  ($x == 100){
    echo "Masuk sini 2 <br>";
}else {
    echo "Masuk keranjang <br>";
}
echo "Program selesai";
?>