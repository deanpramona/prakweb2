<?php
$models = new Pelanggan();

$data_pelanggan = $models->tampilPelanggan();
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
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>Kartu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_pelanggan as $row){
                        
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['kode']?></td>
                        <td><?= $row['nama']?></td>
                        <td><?= $row['jk']?></td>
                        <td><?= $row['tmp_lahir']?></td>
                        <td><?= $row['tgl_lahir']?></td>
                        <td><?= $row['email']?></td>
                        <td><?= $row['kartu_id']?></td>
                        <td>
                        <form action="pelanggan_controler.php" method="POST">
                                <a href="index.php?hal=pelanggan_detail&iddetail=<?php echo $row ['id'] ?> ">
                                    <button type="button" class="btn btn-info btn-sn" title="Detail Pelanggan">
                                    <i class="fa-solid fa-eye fa-beat"></i>
                                    </button>
                                </a>
                                <a href="index.php?hal=pelanggan_edit&idedit=<?php echo $row ['id'] ?> ">
                                    <button type="button" class="btn btn-warning btn-sn" title="Edit Pelanggan">
                                    <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                    </button>
                                </a>

                                <button type="submit" class="btn btn-danger btn-sn" name="proses" value="hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data pelanggan <?= $row['nama']?>?')" title="Hapus Pelanggan">
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
                    <a href="index.php?hal=pelanggan_form" class="bg-gradient-primary"> <button class="btn btn-primary">Tambah Pelanggan</button> </a>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>