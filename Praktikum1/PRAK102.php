<?php
//Membuat variabel dan rumus menghitung volume limas alas persegi panjang
$panjang = 8.9;
$lebar = 14.7;
$tinggi = 5.4;
$volume = 1/3 * $panjang * $lebar * $tinggi;

// Menggunakan number_format untuk membuat 3 desimal di belakang koma
echo number_format($volume,3, ",")." m3";
?>
