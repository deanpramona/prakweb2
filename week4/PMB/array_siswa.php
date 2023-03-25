<?php
include_once('navbar.php');
include_once('sidebar.php');
?>

<!-- ini untuk konten -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>
 <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Praktikum 1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Daftar Nilai Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">

    <?php
// buatlah data array siswa dengan array assosiatif
$ns1 = ['id'=>1, 'nim'=>'01101221', 'uts'=>80, 'uas'=>84, 'tugas'=>78];
$ns2 = ['id'=>2, 'nim'=>'01122163', 'uts'=>85, 'uas'=>90, 'tugas'=>88];
$ns3 = ['id'=>3, 'nim'=>'30122163', 'uts'=>89, 'uas'=>95, 'tugas'=>98];
// simpan seluruh data variable array assosiatif 
// ke dalam array indexing
$ar_nilai = [$ns1,$ns2,$ns3];
?>


<h3 style="text-align: center;" >Daftar Nilai Siswa </h3>
<table border="1" width="100%">
    <thead>
        <th>NO</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Nilai Akhir</th>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $nilai){
            echo '<tr><td>' .$nomor. '</td>';
            echo '<td>' .$nilai['nim']. '</td>';
            echo '<td>' .$nilai['uts']. '</td>';
            echo '<td>' .$nilai['uas']. '</td>';
            echo '<td>' .$nilai['tugas']. '</td>';
            $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir) .'</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>
</section>
</div>
</body>
<!-- ini untuk tutup konten -->

<?php
include_once('footer.php');
?>
