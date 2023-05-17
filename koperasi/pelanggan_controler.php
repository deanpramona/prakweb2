<?php
include_once 'dbkoneksi.php';
include_once 'models/Pelanggan.php';

// Tangkap inputan user dari form
$_kode = $_POST['kode'];  //1
$_nama = $_POST['nama'];   //2
$_jenis_kelamin = $_POST['jk'];  //3
$_tempat_lahir = $_POST['tmp_lahir'];   //4
$_tanggal_lahir = $_POST['tgl_lahir'];  //5
$_email = $_POST['email'];  //6
$_kartu = $_POST['kartu_id'];  //7


// simpan ke dalam array
$data = [
    $_kode, //1
    $_nama, //2
    $_jenis_kelamin, //3
    $_tempat_lahir, //4
    $_tanggal_lahir, //5
    $_email, //6
    $_kartu, //7
];

// ekseusi data array melalui tombol tambah,ubah,hapus
$model = new Pelanggan();
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
        header('Location:index.php?hal=pelanggan');
        break;
        // Alurnya dari form,controler,model,database   
          
          
}
// Arahkan  ke ke halaman produk
// jika proses simpan ubah hapus telah selesai, maka arahkan kembali
header('Location:index.php?hal=pelanggan')
?>