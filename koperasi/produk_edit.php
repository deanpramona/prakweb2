<?php
//buat terlebih dahulu object dari class Produk dan class Jenis produk

$obj_produk = new Produk();
$obj_jenis_produk = new Jenis_produk();

// panggil fungsi yang berfungsi untuk menampilkan data produk dan jenis produk
$data_produk = $obj_produk->tampilProduk();
$obj_jenis_produk->tampilJenis_produk();

// proses edit data
// tangkap request id yang ingin di idedit yang ada di url (setelah user mengklik tombol edit)
$idedit = $_REQUEST['idedit'];

// logic untuk proses data id menggunakan ternary operator
// 1. cek terlebih dahulu id yang ingin di edit menggunakan ternary operator
// 2. jika ada id yang ingin di edit maka akses fungsi tampil produk untuk mengambil data yang sesuai dengan id yang ingin di edit, dan simpan datanya ke dalam sebuah variable
// 3. kita cek jika tidak ada id yang ingin di edit maka kembalikan data dalam bentuk array kosong
$produk = !empty($idedit) ? $obj_produk->ambilProduk($idedit) : [];
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
            <h1 class="m-0">Edit Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
       <div class="container">
        <!-- masukan code table dari bootstrap form builder -->
       <form method="POST" action="produk_controler.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" value="<?php echo $produk ['kode']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?php echo $produk ['nama']?>"type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <input id="harga_beli" name="harga_beli" value="<?php echo $produk ['harga_beli']?>" type="text" class="form-control">
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" value="<?php echo $produk ['stok']?>"type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Min Stok</label> 
    <div class="col-8">
      <input id="min_stok" name="min_stok" value="<?php echo $produk ['min_stok']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
        <option selected>Pilih Jenis Produk</option>
        <?php
        foreach ($data_jenis_produk as $jenis){

        ?>
        <option value="<?php echo $jenis['id']?>"><?php echo $jenis['nama']?></option>
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


