<?php
include_once 'dbkoneksi.php';
include_once 'models/Produk.php';

// Tangkap inputan user dari form
$_kode = $_POST['kode'];  //1
$_nama = $_POST['nama'];   //2
$_harga_beli = $_POST['harga_beli'];  //3
$_stok = $_POST['stok'];   //4
$_minstok = $_POST['min_stok'];  //5
$_jenis = $_POST['jenis_produk_id'];  //6


// simpan ke dalam array
$data = [
    $_kode, //1
    $_nama, //2
    $_harga_beli, //3
    $_harga_jual = 1.2 * $_harga_beli, //4
    $_stok, //5
    $_minstok, //6
    $_jenis, //7
];

// ekseusi data array melalui tombol tambah,ubah,hapus
$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol){
    case 'simpan':
        $model->simpan($data);
        break;
    case 'edit':
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;
    case 'hapus':
        unset($data);
        // panggil fungsi hapus data yang disertai tangkapan dari hidden field idx untuk klausa where id
        $model->hapus($_POST['idx']);
        break;
    default:
        header('Location:index.php?hal=produk');
        break;
        // Alurnya dari form,controler,model,database   
          
          
}
// Arahkan  ke ke halaman produk
// jika proses simpan ubah hapus telah selesai, maka arahkan kembali
header('Location:index.php?hal=produk')
?>