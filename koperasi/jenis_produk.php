<?php
$models = new Jenis_produk();

$data_jenis_produk = $models->tampilJenis_produk();
?>

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_jenis_produk as $row){
                        
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['nama']?></td>
                        <td>
                            <form action="jenis_produk_controler.php" method="POST">
                            <button type="submit" class="btn btn-danger btn-sn" name="proses" value="hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data Jenis produk <?= $row['nama']?>?')" title="Hapus Produk">
                                <i class="fa-solid fa-trash-can fa-beat"></i>
                                </button>
                                <input type="hidden" name="idx" value="<?= $row['id']?>">
                            </form>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                         <a href="index.php?hal=jenis_produk_form" class="bg-gradient-primary"> <button class="btn btn-primary">Tambah Jenis Produk</button> </a>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>