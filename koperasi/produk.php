<?php
$models = new Produk();

$data_produk = $models->tampilProduk();
?>

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Min Stok</th>
                            <th>Jenis Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_produk as $row){
                        
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['kode']?></td>
                        <td><?= $row['nama']?></td>
                        <td><?= $row['harga_beli']?></td>
                        <td><?= $row['harga_jual']?></td>
                        <td><?= $row['stok']?></td>
                        <td><?= $row['min_stok']?></td>
                        <td><?= $row['jenis']?></td>
                        <td>
                            <form action="produk_controler.php" method="POST">
                                <a href="index.php?hal=produk_detail&iddetail=<?php echo $row ['id'] ?> ">
                                    <button type="button" class="btn btn-info btn-sn" title="Detail Produk">
                                    <i class="fa-solid fa-eye fa-beat"></i>
                                    </button>
                                </a>
                                <a href="index.php?hal=produk_edit&idedit=<?php echo $row ['id'] ?> ">
                                    <button type="button" class="btn btn-warning btn-sn" title="Edit Produk">
                                    <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                    </button>
                                </a>

                                <button type="submit" class="btn btn-danger btn-sn" name="proses" value="hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data produk <?= $row['nama']?>?')" title="Hapus Produk">
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
                    <a href="index.php?hal=produk_form" class="bg-gradient-primary"> <button class="btn btn-primary">Tambah Produk</button> </a>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>