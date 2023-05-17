<?php
class Kartu{
    private $koneksi;

    public function __construct(){
        // sebuah function yang dijalankan awalan
        global $conn;
        $this->koneksi =$conn;

    }

    public function tampilKartu(){
          // select semua kolom yg ada di dalam table produk
        $sql = "SELECT * FROM kartu";
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yang sudah disiapkan method prepare menggunkan method execute
        $ps->execute();
        // simpan data sql yang sudah di eksekusi ke dalam data array menggunakan method fetchALL
        $data = $ps->fetchALL();
        // kembalikan data produk dalam bentuk data array yang sudah disimpan ke dalam variable $data
        return $data;
    }
}
?>