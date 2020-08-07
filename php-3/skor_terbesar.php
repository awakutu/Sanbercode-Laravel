<?php
function skor_terbesar($arr){
//kode di sini
          $checker = $arr;
          for($i=0; $i < count($arr); $i++){
            $max = max(array_column($arr, 'nilai'));
            if($arr[$i]['nilai'] == $max){
              $checker = $arr[$i];
            }
          }
          return [$checker['kelas'] => $checker];
}

$laravel = [
            ["nama"=> "Ujang", "kelas"=> "Laravel", "nilai"=> 80],
            ["nama"=> "Bagas", "kelas"=> "Laravel", "nilai"=> 85],
            ["nama"=> "Bima", "kelas"=> "Laravel", "nilai"=> 88],
            ["nama"=> "Aghnat",  "kelas"=> "Laravel", "nilai"=> 90]
        ];
$native = [
            ["nama"=> "Bambang", "kelas"=> "React Native", "nilai"=> 79],
            ["nama"=> "Regi", "kelas"=> "React Native", "nilai"=> 86],
            ["nama"=> "Baim", "kelas"=> "React Native", "nilai"=> 81],
            ["nama"=> "Via",  "kelas"=> "React Native", "nilai"=> 77]
        ];
$js = [
            ["nama"=> "Indra", "kelas"=> "React JS", "nilai"=> 85],
            ["nama"=> "Salma", "kelas"=> "React JS", "nilai"=> 78],
            ["nama"=> "Pamungkas", "kelas"=> "React JS", "nilai"=> 80],
            ["nama"=> "Okta",  "kelas"=> "React JS", "nilai"=> 81]
        ];

echo "<pre>";
print_r(skor_terbesar($laravel));
print_r(skor_terbesar($native));
print_r(skor_terbesar($js));
echo "</pre>";
// TEST CASES
// print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>