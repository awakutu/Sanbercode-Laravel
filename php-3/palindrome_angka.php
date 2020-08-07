<?php

function palindrome_angka($angka) {
    $sementara = $angka;
    $angkaBaru=$angka+1;
    $reverse = 0;
    while (floor($sementara)) { 
        $a = $sementara % 10;
        $reverse = $reverse * 10 + $a;
        $sementara = $sementara/10;
    }
    if ($reverse<10) {
        echo $angka+1;
    }
    elseif ($reverse==$angka){   
        echo $angka;   
    }  
    elseif ($reverse!=$angka) {    
        palindrome_angka($angkaBaru);
        
    };   
};
// tulis kode di sini
     
  
// TEST CASES
echo palindrome_angka(8); echo "<br>"; // 9
echo palindrome_angka(10); echo "<br>";// 11
echo palindrome_angka(117); echo "<br>";// 121
echo palindrome_angka(175); echo "<br>";// 181
echo palindrome_angka(1000); echo "<br>";// 1001

?>