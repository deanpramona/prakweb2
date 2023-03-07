<?php
function harga ($produk , $jumlah){
    // jika tv harganya 4.200.000
    // jika kulkas harganya 3.100.000
    // jika mesin cuci 3.800.000

if ($produk == 'TV' ){
    return 4200000 * $jumlah;
}elseif ($produk == 'Kulkas'){
    return 3100000 * $jumlah;
}elseif ($produk == 'Mesin Cuci'){
    return 3800000 * $jumlah;
}else {
    return 0;
}


}

?>