<?php
function kelulusan ($_nilai){
    // jika nilai rata-rata siswa dibawah 55 tidak lulus
    // jika nilai rata-rata siswa  di atas 55 lulus.

if ($_nilai <= 55){
    return 'Tidak lulus';
}else{
    return 'Anda Lulus';
}
}

// buat fungsi grade, lalu beri keterangan :
// jika nilai di atas 85-100 grade A
// jika nilai di atas 70-84 grade B
// jika nilai di atas 56-69 grade C
// jika nilai di atas 36-55 grade D
// jika nilai di atas 10-35 grade E
// jika tidak ada nilai cetak I (anda tidap punya nilai)

function grade($_nilai){
    if ($_nilai >= 85){
        return "A";
    }elseif ($_nilai >= 70){
        return "B";
    }elseif ($_nilai >= 56){
        return "C";
    }elseif ($_nilai >= 36){
        return "D";
    }elseif ($_nilai >= 10){
        return "E";
    }else{
        return "I (Tidak ada Nilai)";
    }
}

?>