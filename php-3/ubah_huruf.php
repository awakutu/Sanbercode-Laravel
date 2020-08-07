<?php
function ubah_huruf($string){
$huruf=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
$font = '';
	for($i=0; $i < strlen($string); $i++){
		for ($x=0; $x < count($huruf); $x++) { 
			if($huruf[$x] == substr($string, $i, 1)) {
				$font.=$huruf[$x+1];
			}
		}
	}
	return $font;
	//kode di sini
}

// TEST CASES
echo ubah_huruf('wow'); echo "<br>"; // xpx
echo ubah_huruf('developer'); echo "<br>";// efwfmpqfs
echo ubah_huruf('laravel'); echo "<br>";// mbsbwfm
echo ubah_huruf('keren'); echo "<br>";// lfsfo
echo ubah_huruf('semangat'); echo "<br>";// tfnbohbu

?>