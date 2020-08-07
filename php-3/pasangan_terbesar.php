<?php
function pasangan_terbesar($angka){
// kode di sini
	$stringAngka = (string)$angka;
	$checker = $stringAngka[0].$stringAngka[1];
	for($i=0; $i < strlen($stringAngka) - 1; $i++){
		$combineValue = $stringAngka[$i].$stringAngka[$i+1];
		if($checker < $combineValue){
			$checker = $combineValue;
		}
	}
	return $checker;
}
// TEST CASES
echo pasangan_terbesar(641573); echo "<br>";// 73
echo pasangan_terbesar(12783456); echo "<br>";// 83
echo pasangan_terbesar(910233); echo "<br>";// 91
echo pasangan_terbesar(71856421); echo "<br>";// 85
echo pasangan_terbesar(79918293); echo "<br>";// 99

?>