<?php
// definisikan variable konstanta
define ('PHI' , 3.14);

// soal 1. cari nilai dari luas lingkarn dengan jari-jari 8
// soal 2. cari nilai dari keliling lingkaran dengan jari-jari 8

// definisikan jari-jari
$jari = 8;

// Rumus luas lingkaran
$luas = PHI * $jari * $jari;
//  Rumus Keliling
$keliling = 2 * PHI * $jari;

echo 'Luas lingkaran dengan jari-jari ' .$jari. ' adalah ' .$luas;
echo '<br>Keliling lingkaran dengan jari-jari ' .$jari. ' adalah ' .$keliling;

?>