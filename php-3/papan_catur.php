<?php

function papan_catur($angka){
	for ($row=0; $row <$angka ; $row++){ 
		for ($col=0; $col < $angka; $col++){ 
			if ($row%2==0) {
				echo "#&nbsp&nbsp";
			}elseif ($row%2==1) {
				for ($col=0; $col < $angka-1; $col++){
					echo "&nbsp&nbsp#";
				}
			};
						
		};
		echo "<br>";
	};
	echo "<br>";
// tulis kode di sini
};

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/