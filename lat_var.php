<?php
    //Menampilkan Pesan Teks
    $pesan = "Selamat belajar";
    echo "Selamat datang dan ".$pesan;
    echo "<br>";
    echo "-------<br>";

    //Implementasi Array
    $cars = array("BMW", "Ferrari", "Jaguar");
    echo $cars [2];
    echo "<br>";
    echo "-------<br>";

    //Operasi Aritmatika: Penjumlahan
    $a = 10;
    $b = 5; 
    $c = $a + $b;
    echo "Hasil penjumlahan dari ".$a." + ".$b." = ".$c;
    echo "<br>";
    echo "-------<br>";

    //Penjumlahan singkat
    $a += $b;
    echo $a . "<br>";
    echo "-------<br>";

    //Penggabungan String
    $depan = "Ezra";
    $belakang = "Elshama";
    $depan .= " ".$belakang;
    echo $depan;

?>
