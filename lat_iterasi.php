<?php
    //WHILE LOOP
    /*
    $i = 1; // Initialize counter
    while ($i <= 10) { // Check condition
    echo $i; // Execute code
    $i++; //setara denga $i = $i+1
    }
    */


    //FOR LOOP
    /*
    //(inisiasi, kondisi, eksekusi)
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    */


    //FOREACH LOOP
    //foreach biasa digunakan untuk array
    $colors = array("red", "green", "blue", "yellow");

    //mengakses array dari values
    foreach ($colors as $value) {
        echo "$value <br>";
        }
        
    echo "-------<br>";
        
    //mengakses array menggunakan indeks
    for($i=0; $i<=2; $i++)
        echo $colors[$i] . "<br>";
?>