<?php
class Jenis_produk{
    private $koneksi;

    public function __construct(){
        // sebuah function yang dijalankan awalan
        global $conn;
        $this->koneksi =$conn;

    }

    public function tampilJenis_produk(){
          // select semua kolom yg ada di dalam table produk
        $sql = "SELECT * FROM jenis_produk";
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yang sudah disiapkan method prepare menggunkan method execute
        $ps->execute();
        // simpan data sql yang sudah di eksekusi ke dalam data array menggunakan method fetchALL
        $data = $ps->fetchALL();
        // kembalikan data produk dalam bentuk data array yang sudah disimpan ke dalam variable $data
        return $data;
    }

    // Simpan Data / insert into
    public function simpan($data){
        $sql = "INSERT INTO jenis_produk (nama) VALUES (?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

       // Hapus data / Delete
       public function hapus($id){
        $sql = "DELETE FROM jenis_produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        }

}
?>