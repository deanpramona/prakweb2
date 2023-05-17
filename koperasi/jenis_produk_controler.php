<?php
include_once 'dbkoneksi.php';
include_once 'models/Jenis_produk.php';

// Tangkap inputan user dari form
$_nama = $_POST['nama'];   //2

// simpan ke dalam array
$data = [
    $_nama, //2
];

// ekseusi data array melalui tombol tambah,ubah,hapus
$model = new Jenis_produk();
$tombol = $_REQUEST['proses'];
switch ($tombol){
    case 'simpan':
        $model->simpan($data);
        break;
    case 'hapus':
        unset($data);
        // panggil fungsi hapus data yang disertai tangkapan dari hidden field idx untuk klausa where id
        $model->hapus($_POST['idx']);
        break;
    default:
        header('Location:index.php?hal=jenis_produk');
        break;
        // Alurnya dari form,controler,model,database   
          
          
}
// Arahkan  ke ke halaman produk
// jika proses simpan ubah hapus telah selesai, maka arahkan kembali
header('Location:index.php?hal=jenis_produk')
?>