<?php
function tentukan_deret_aritmatika($arr) {
	$n=$arr[1]-$arr[0];
	for ($i=0; $i <count($arr)-1 ; $i++) { 
		if($arr[$i+1] - $arr[$i] != $n){
			return 'false';
		} 
	}
	return 'true';
// kode di sini
}

// // TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); echo "<br>";// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); echo "<br>";// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); echo "<br>";//true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);echo "<br>";// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);echo "<br>";// false
?>