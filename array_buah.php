<?php
// cara penulisan array
$ar_buah = array('pisang','mangga','apel');

// array indexed
$buah = ['alpukat','jeruk','manggis','kelapa'];
// cara manggil array indexed
echo $buah[1];

// cetak jumlah buah
echo '<br/>Jumlah Buah ' .count($buah);

// cetak seluruh buah
echo "<ol>";
foreach($buah as $fruit){
    echo "<li>$fruit</li>";
}
echo "</ol>";

// =========================
// tambahkan buah baru ke dalam array
$buah[] = "durian";

// ubah buah keindex 1
$buah[1] = "apel";


// cetak seluruh buah
echo "<ol>";
foreach($buah as $buas){
    echo "<li>$buas</li>";
}
echo "</ol>";


?>