<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body{
      margin:0 ;
    }
      .container-hasil {
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.65);
            padding: 10px;
        }
  </style>

</head>
<body>
<div class="w-75 mt-5 mx-auto p-4 border shadow-sm">
	<div class="row">
		<div class="col-md-8">
        <h2>Belanja Online</h2>
    <hr>
    <form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="produk" id="produk_0" type="checkbox" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="produk" id="produk_1" type="checkbox" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="produk" id="produk_2" type="checkbox" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
		</div>
		<div class="col-md-4">
        <ul style="list-group">
				<li class="list-group-item active">
					Daftar Harga
				</li>
				<li class="list-group-item">
					TV : 4.200.000
				</li>
				<li class="list-group-item">
					Kulkas : 3.100.000
				</li>
				<li class="list-group-item ">
					Mesin Cuci : 3.800.000
				</li>
				<li class="list-group-item active">
					Harga Dapat Berubah Setiap Saat
				</li>
			</ul>
		</div>
	</div>
</div>
<hr>

<div class="container-hasil">
<?php
require_once 'fungsi2.php';
$nama = $_POST['name'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$hasil = harga($produk, $jumlah);


echo "<h4>Hasil Pembelian</h4>";
echo "Nama Customer : $nama ";
echo "<br>Produk Pilihan : $produk ";
echo "<br>Jumlah Beli : $jumlah ";
echo "<br>Total Belanja : " ."Rp. " .number_format($hasil, 2, "," , ".").",-";

?>
</div>
</body>
</html>