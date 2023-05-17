<?php
// tangkap  request id dari klik tombol detail
$id = $_REQUEST['iddetail'];

// buat object pelanggan dari calss pelanggan
$obj_pelanggan = new Pelanggan();

// tampilkan dan ambil data pelanggan menggunakan function ambilPelanggan dari class pelanggan
// berdasarkan id nya
$pelanggan = $obj_pelanggan->ambilPelanggan($id);
?>

<!-- ini untuk konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Detail Pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <div class="container">
        <ul>
            <li>ID Pelanggan : <?php echo $pelanggan ['id'] ?></li>
            <li>Kode Pelanggan : <?php echo $pelanggan ['kode'] ?></li>
            <li>Nama Pelanggan : <?php echo $pelanggan ['nama'] ?></li>
            <li>Jenis Kelamin Pelanggan : <?php echo $pelanggan ['jk'] ?></li>
            <li>Tempat Lahir Lahir Pelanggan : <?php echo $pelanggan ['tmp_lahir'] ?></li>
            <li>Tanggal Lahir : <?php echo $pelanggan ['tgl_lahir'] ?></li>
            <li>Email : <?php echo $pelanggan ['email'] ?></li>
           
            <li>Jenis Kartu : <?php echo $pelanggan ['kartu_id'] ?></li>
        </ul>
    </div>
    </section>
</div>
<!-- ini untuk tutup konten -->