<?php
class Produk{
    private $koneksi;

    public function __construct(){
        // sebuah function yang dijalankan awalan
        global $conn;
        $this->koneksi =$conn;

    }

    public function tampilProduk(){
          // select semua kolom yg ada di dalam table produk
        $sql = "SELECT p.*, j.nama AS jenis FROM produk p INNER JOIN jenis_produk j ON j .id = p.jenis_produk_id ORDER BY P.id DESC"; 
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yang sudah disiapkan method prepare menggunkan method execute
        $ps->execute();
        // simpan data sql yang sudah di eksekusi ke dalam data array menggunakan method fetchALL
        $data = $ps->fetchALL();
        // kembalikan data produk dalam bentuk data array yang sudah disimpan ke dalam variable $data
        return $data;
    }

    public function ambilProduk($id){
             // select semua kolom yg ada di dalam table produk
             $sql = "SELECT p.*, j.nama AS jenis FROM produk p INNER JOIN jenis_produk j ON j .id = p.jenis_produk_id WHERE P.id=? "; 
             // kirim data select menggunakan method prepare
             $ps = $this->koneksi->prepare($sql);
             // eksekusi data select yang sudah disiapkan method prepare menggunkan method execute
             $ps->execute([$id]);
             // simpan data sql yang sudah di eksekusi ke dalam data array menggunakan method fetchALL
             $data = $ps->fetch();
             // kembalikan data produk dalam bentuk data array yang sudah disimpan ke dalam variable $data
             return $data;
    }


    // Simpan Data / insert into
    public function simpan($data){
        $sql = "INSERT INTO produk (kode,nama,harga_beli,harga_jual,stok,min_stok,jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    // Edit atau Ubaah data / Update
    public function ubah($data){
        $sql = "UPDATE produk SET kode=?,nama=?,harga_beli=?,harga_jual=?,stok=?,min_stok=?,jenis_produk_id=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }


    // Hapus data / Delete
    public function hapus($id){
    $sql = "DELETE FROM produk WHERE id=?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
    }
}
?>