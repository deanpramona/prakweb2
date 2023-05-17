<?php
//buat terlebih dahulu object dari class Produk dan class Jenis produk

$obj_pelanggan = new Pelanggan();
$obj_kartu = new Kartu();

// panggil fungsi yang berfungsi untuk menampilkan data produk dan jenis produk
$data_pelanggan = $obj_pelanggan->tampilPelanggan();
$data_kartu = $obj_kartu->tampilKartu();

// proses edit data
// tangkap request id yang ingin di idedit yang ada di url (setelah user mengklik tombol edit)
$idedit = $_REQUEST['idedit'];

// logic untuk proses data id menggunakan ternary operator
// 1. cek terlebih dahulu id yang ingin di edit menggunakan ternary operator
// 2. jika ada id yang ingin di edit maka akses fungsi tampil produk untuk mengambil data yang sesuai dengan id yang ingin di edit, dan simpan datanya ke dalam sebuah variable
// 3. kita cek jika tidak ada id yang ingin di edit maka kembalikan data dalam bentuk array kosong
$pelanggan = !empty($idedit) ? $obj_pelanggan->ambilPelanggan($idedit) : [];
// artinya jika $idedit kosong, maka fungsi ambilproduk tidak dijalankan
// namun apabila $idedit tidak kosong atau ada produk yang ingin di edit , maka fungsi ambil profuk akaan dijalankan dengan parameter id  produk ($idedit) yang ingin di edit dan akan mengemmbalikan data produk yang sesuai


?>

<!-- ini untuk konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
       <div class="container">
        <!-- masukan code table dari bootstrap form builder -->
       <form method="POST" action="pelanggan_controler.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" value="<?php echo $pelanggan ['kode']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?php echo $pelanggan ['nama']?>"type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <input id="jk" name="jk" value="<?php echo $pelanggan ['jk']?>" type="text" class="form-control">
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" value="<?php echo $pelanggan ['tmp_lahir']?>"type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" value="<?php echo $pelanggan ['tgl_lahir']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" value="<?php echo $pelanggan ['email']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kartu_id" class="col-4 col-form-label">Jenis Kartu</label> 
    <div class="col-8">
      <select id="kartu_id" name="kartu_id" class="custom-select">
        <option selected>Pilih Jenis Kartu</option>
        <?php
        foreach ($data_kartu as $kartu){

        ?>
        <option value="<?php echo $kartu['id']?>"><?php echo $kartu['nama']?></option>
        <?php
        }

        ?>

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="edit" class="btn btn-primary">Edit</button>
      <input type="hidden" name="idx" value="<?=$idedit?>">
    </div>
  </div>
</form>
       </div>
    </section>
</div>
<!-- ini untuk tutup konten -->


