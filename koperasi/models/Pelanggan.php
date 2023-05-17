<?php
class Pelanggan{
    private $koneksi;

    public function __construct(){
        // sebuah function yang dijalankan awalan
        global $conn;
        $this->koneksi =$conn;

    }

    public function tampilPelanggan(){
          // select semua kolom yg ada di dalam table produk
        $sql = "SELECT p.*,j.nama AS jenis FROM pelanggan p INNER JOIN kartu j ON j .id = p.kartu_id ORDER BY p.id DESC";
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yang sudah disiapkan method prepare menggunkan method execute
        $ps->execute();
        // simpan data sql yang sudah di eksekusi ke dalam data array menggunakan method fetchALL
        $data = $ps->fetchALL();
        // kembalikan data produk dalam bentuk data array yang sudah disimpan ke dalam variable $data
        return $data;
    }

    public function ambilPelanggan($id){
        // select semua kolom yg ada di dalam table pelanggan
        $sql = "SELECT p.*, j.nama AS kartu FROM pelanggan p INNER JOIN kartu j ON j .id = p.kartu_id WHERE P.id=? "; 
        // kirim data select menggunakan method prepare
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data select yang sudah disiapkan method prepare menggunkan method execute
        $ps->execute([$id]);
        // simpan data sql yang sudah di eksekusi ke dalam data array menggunakan method fetch
        $data = $ps->fetch();
        // kembalikan data produk dalam bentuk data array yang sudah disimpan ke dalam variable $data
        return $data;
    }

    // Simpan Data / insert into
    public function simpan($data){
        $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id) VALUES (?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

        // Edit atau Ubaah data / Update
        public function ubah($data){
            $sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tmp_lahir=?,tgl_lahir=?,email=?,kartu_id=? WHERE id=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }
    
    
        // Hapus data / Delete
        public function hapus($id){
        $sql = "DELETE FROM pelanggan WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        }

}
?>