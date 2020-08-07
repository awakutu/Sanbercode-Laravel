<?php
function tentukan_deret_geometri($arr) {
	$n=$arr[1]/$arr[0];
	for ($i=0; $i <count($arr)-1 ; $i++) { 
		if($arr[$i+1] / $arr[$i] != $n){
			return 'false';
		} 
	}
	return 'true';
// kode di sini
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); echo "<br>";// true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); echo "<br>";// true
echo tentukan_deret_geometri([2, 4, 6, 8]);echo "<br>"; // false
echo tentukan_deret_geometri([2, 6, 18, 54]); echo "<br>";// true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); echo "<br>";//false
?>