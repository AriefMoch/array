<?php

// menampilkan deret array
$numbers = array( 1, 2, 3, 4, 5, 6);
// menghapus deret dua angka di depan
$hasilSlice = array_slice ($numbers, 2);
// menghapus angka terakhir
array_pop ($hasilSlice);
// menambah angka 0 di deret angka yang paling depan
array_unshift ($hasilSlice, 0);
// menambah angka 8 dideret angka yang paling belakang
array_push ($hasilSlice, 8);
// membalik deret angka
$output = array_reverse($hasilSlice);
// 8,5,4,3,0
var_dump ($output);
// output adalah array(5) { [0]=> int(8) [1]=> int(5) [2]=> int(4) [3]=> int(3) [4]=> int(0) }

?>
